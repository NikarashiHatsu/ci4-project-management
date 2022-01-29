<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<?= $this->include('components/alerts') ?>
<div class="flex items-center justify-between mb-6">
    <h6 class="text-lg font-medium">
        List Tugas
    </h6>
    <a href="<?= base_url('/task/new') ?>" class="btn btn-primary">
        <span>
            Tambah
        </span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
        </svg>
    </a>
</div>
<div class="card bg-base-100 border">
    <div class="card-body">
        <div class="overflow-x-auto">
            <table class="table table-compact table-zebra w-full">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama Tugas</th>
                        <th>Asal Projek</th>
                        <th>Deskripsi Singkat</th>
                        <th>Status</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($tasks) > 0): ?>
                        <?php foreach($tasks as $task): ?>
                            <tr>
                                <td><?= $task->id ?></td>
                                <td><?= $task->name ?></td>
                                <td>
                                    <a href="<?= base_url('/project/' . $task->project_id) ?>" class="badge badge-info">
                                        <?= $task->project_name ?>
                                    </a>
                                </td>
                                <td><?= mb_strimwidth($task->description, 0, 128, '...') ?></td>
                                <td>
                                    <?php
                                        switch ($task->status) {
                                            case 'Belum selesai':
                                                ?>
                                                    <div class="span badge badge-error">
                                                        Belum Selesai
                                                    </div>
                                                <?php
                                                break;

                                            case 'Selesai':
                                                ?>
                                                    <div class="span badge badge-success">
                                                        Selesai
                                                    </div>
                                                <?php
                                                break;

                                            default:
                                                ?>
                                                    <div class="span badge">
                                                        Tidak Diketahui
                                                    </div>
                                                <?php
                                                break;
                                        }
                                    ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('/task/edit/' . $task->id) ?>" class="btn btn-sm btn-info">
                                        Edit
                                    </a>
                                    <form action="<?= base_url('/task/delete/' . $task->id) ?>" method="post" class="inline">
                                        <button href="<?= base_url('/task/' . $task->id) ?>" class="btn btn-sm btn-error">
                                            Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="6">
                                Belum ada data
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>