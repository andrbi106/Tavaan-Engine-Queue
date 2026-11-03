# Tavaan Engine — Queue

> **صف و Worker** — موتور Queue در فریمورک تَوان

## مشخصات

| فیلد | مقدار |
|---|---|
| شناسه | `tavaan.engine.queue` |
| نام | `Queue` |
| عنوان فارسی | صف و Worker |
| نسخه | `0.1.0` |
| namespace | `Tavaan\Engine\Queue` |
| نوع | `engine` |
| Facade | `Queue` (accessor: `queue`) |

## توضیحات

M5 — ۵ درایور (sync/database/redis/file/null). Worker مقاوم با Retry/Backoff نمایی، Batch/Chain، Rate Limiting، Failed Jobs + DLQ. 🔒 سریال‌سازی فقط JSON + Allowlist؛ Pop اتمیک با SKIP LOCKED. ♻️ محافظ بازگشت (0.5.1): تشخیص ارجاع دوری + سقف عمق ۶۴ + رد زنجیرهٔ دوری با QueueException تمیز.

## قراردادها (Contracts)

این موتور قراردادهای زیر را ارائه می‌دهد:

- `Tavaan\Engine\Queue\Contracts\BatchRepositoryInterface`
- `Tavaan\Engine\Queue\Contracts\FailedJobProviderInterface`
- `Tavaan\Engine\Queue\Contracts\JobInterface`
- `Tavaan\Engine\Queue\Contracts\QueueInterface`
- `Tavaan\Engine\Queue\Contracts\ShouldQueue`

## خطاها (Exceptions)

- `Tavaan\Engine\Queue\Exceptions\JobTimedOutException`
- `Tavaan\Engine\Queue\Exceptions\MaxAttemptsExceededException`
- `Tavaan\Engine\Queue\Exceptions\QueueException`
- `Tavaan\Engine\Queue\Exceptions\UnsafeJobException`

## Facadeها

- `Tavaan\Engine\Queue\Facades\Queue`

## کلاس‌های اصلی

- `src/Batch/ArrayBatchRepository.php`
- `src/Batch/Batch.php`
- `src/Batch/DatabaseBatchRepository.php`
- `src/Batch/PendingBatch.php`
- `src/Batch/PendingChain.php`
- `src/Console/QueueFailedCommand.php`
- `src/Console/QueueFlushCommand.php`
- `src/Console/QueueListenCommand.php`
- `src/Console/QueueMonitorCommand.php`
- `src/Console/QueuePruneFailedCommand.php`
- `src/Console/QueueRestartCommand.php`
- `src/Console/QueueRetryCommand.php`
- `src/Console/QueueWorkCommand.php`
- `src/Events/JobFailed.php`
- `src/Events/JobProcessed.php`
- `src/Events/JobProcessing.php`
- `src/Events/JobQueued.php`
- `src/Events/JobReleased.php`
- `src/Events/WorkerStopping.php`
- `src/Failed/DatabaseFailedJobProvider.php`
- ... و 22 فایل دیگر

## Service Providerها

- `Tavaan\Engine\Queue\QueueManagerServiceProvider`

## وابستگی‌ها

**موتورهای مورد‌نیاز:**

- `config`
- `event`

**موتورهای اختیاری:**

- `database`
- `cache`
- `log`

## جداول دیتابیس

- `tvn_jobs`
- `tvn_failed_jobs`
- `tvn_job_batches`

## دستورات CLI

- `queue:work`
- `queue:listen`
- `queue:restart`
- `queue:retry`
- `queue:failed`
- `queue:flush`
- `queue:prune-failed`
- `queue:monitor`

## پیکربندی

- فایل پیکربندی: `config/queue.php`
- کلید: `queue`

## نصب

```bash
git clone https://github.com/andrbi106/Tavaan-Engine-Queue.git
```

این موتور بخشی از فریمورک تَوان است و معمولاً به‌صورت مستقیم نصب نمی‌شود،
بلکه توسط [Tavaan-Core](https://github.com/andrbi106/Tavaan-Core) مدیریت می‌شود.

## روابط با سایر مخازن

| مخزن | نقش |
|---|---|
| **`andrbi106/Tavaan-Engine-Queue`** (این مخزن) | موتور Queue |
| `andrbi106/Tavaan-Engine-Core` | ساختار پایه + درگاه ارتباط موتورها |
| `andrbi106/Tavaan-Core` | اسکلت اپلیکیشن + همهٔ موتورها |
| `Derogaramin/Tavaan-Framework` | فریمورک مادر (monorepo) |

## مجوز

MIT — هم‌راستا با فریمورک مادر تَوان.
