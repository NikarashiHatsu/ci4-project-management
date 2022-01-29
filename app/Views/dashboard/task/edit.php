<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<?= $this->include('components/alerts') ?>
<div class="flex items-center justify-between mb-6">
    <a href="<?= base_url('/task') ?>" class="btn btn-primary">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
        </svg>
        <span>
            Kembali
        </span>
    </a>
    <h6 class="text-lg font-medium">
        Edit Tugas
    </h6>
</div>

<div class="card bg-base-100 border">
    <div class="card-body">
        <form action="<?= base_url('/task/update/' . $task->id) ?>" method="post">
            <input type="hidden" name="status" value="Belum selesai" />
            <div class="grid grid-cols-12 grid-flow-row gap-6">
                <div class="col-span-12 sm:col-span-6 md:col-span-4 form-control">
                    <label for="project_id" class="label">
                        <span class="label-text">Asal Projek</span>
                    </label>
                    <select name="project_id" id="project_id" class="select select-bordered select-disabled" readonly>
                        <option value="">-Pilih Projek-</option>
                        <?php foreach($projects as $project): ?>
                            <option
                                value="<?= $project->id ?>"
                                <?= $task->project_id == $project->id ? 'selected' : '' ?>
                            >
                                [<?= $project->id ?>] <?= $project->name ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-span-12 sm:col-span-6 md:col-span-4 form-control">
                    <label for="name" class="label">
                        <span class="label-text">Nama Tugas</span>
                    </label>
                    <input type="text" name="name" id="name " class="input input-bordered" value="<?= $task->name ?>" required />
                </div>
                <div class="col-span-12 form-control">
                    <label for="description" class="label">
                        <span class="label-text">Deskripsi Tugas</span>
                    </label>
                    <textarea name="description" id="description" rows="5" class="textarea textarea-bordered" require><?= $task->description ?></textarea>
                </div>
                <div class="col-span-12 flex justify-end">
                    <button class="btn btn-primary">
                        <span class='mr-2'>
                            Simpan
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
                        </svg>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<?= $this->endSection() ?>