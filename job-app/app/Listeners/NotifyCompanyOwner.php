<?php

namespace App\Listeners;

use App\Events\JobApplicationSubmitted;
use App\Notifications\newJobApply;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class NotifyCompanyOwner implements ShouldQueue
{
    use InteractsWithQueue;

    /**
     * اسم الـ Queue — لازم تعمله في config/queue.php أو اتركه 'default'
     */
    public string $queue = 'notifications';

    /**
     * عدد مرات إعادة المحاولة لو فشل الـ Job
     */
    public int $tries = 3;

    /**
     * المنطق الأساسي — بيتنفّذ في الخلفية عبر Queue Worker
     */
    public function handle(JobApplicationSubmitted $event): void
    {
        // جلب الـ job vacancy من الـ application
        $job = $event->application->jobVacancy;

        // جلب صاحب الشركة — اللي هيستقبل الإشعار
        $owner = $job?->company?->owner;

        // لو مفيش owner، مش هنبعت إشعار
        if (! $owner) {
            return;
        }

        // إرسال الإشعار باستخدام الـ Notification الموجودة عندك
        $owner->notify(new newJobApply(
            $event->jobSeeker,
            $job,
            $event->application,
            $event->application->id,
        ));
    }

    /**
     * بيتنفّذ لو فشل الـ Listener بعد كل المحاولات
     */
    public function failed(JobApplicationSubmitted $event, \Throwable $exception): void
    {
        \Log::error('erorr', [
            'application_id' => $event->application->id,
            'job_seeker_id'  => $event->jobSeeker->id,
            'error'          => $exception->getMessage(),
        ]);
    }
}
