<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<?= $this->include('components/alerts') ?>
<div class="flex items-center justify-between mb-6">
    <a href="<?= base_url('/project') ?>" class="btn btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
        </svg>
        <span>
            Kembali
        </span>
    </a>
    <h6 class="text-lg font-medium">
        Tugas dari: <?= $project->name ?>
    </h6>
</div>

<div class="card bg-base-100 border">
    <div class="card-body">
        <h6 class="font-semibold">
            List Tugas:
        </h6>
        <ol class="list-disc">
            <?php foreach($tasks as $task): ?>
                <li class="ml-4 mt-2">
                    <a href="<?= base_url('/task/edit/' . $task->id) ?>" class="badge badge-info">
                        <?= $task->name ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ol>
    </div>
</div>

<?= $this->endSection() ?>