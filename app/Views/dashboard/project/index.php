<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<?= $this->include('components/alerts') ?>
<div class="flex items-center justify-between mb-6">
    <h6 class="text-lg font-medium">
        List Projek
    </h6>
    <a href="<?= base_url('/project/new') ?>" class="btn btn-primary">
        <span>
            Tambah
        </span>
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
        </svg>
    </a>
</div>
<div class="card bg-base-100 border shadow">
    <div class="card-body">
        <table class="table table-compact table-zebra w-full">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Projek</th>
                    <th>Banyak Tugas</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($projects) > 0): ?>
                    <?php foreach($projects as $project): ?>
                        <tr>
                            <td><?= $project->id ?></td>
                            <td><?= $project->name ?></td>
                            <td>0</td>
                            <td>
                                <a href="<?= base_url('/project/' . $project->id) ?>" class="btn btn-sm btn-success">
                                    List Tugas
                                </a>
                                <a href="<?= base_url('/project/edit/' . $project->id) ?>" class="btn btn-sm btn-info">
                                    Edit
                                </a>
                                <form action="<?= base_url('/project/delete/' . $project->id) ?>" method="post" class="inline">
                                    <button href="<?= base_url('/project/' . $project->id) ?>" class="btn btn-sm btn-error">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4">
                            Belum ada data
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection() ?>