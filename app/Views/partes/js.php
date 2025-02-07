 <!-- Bootstrap core JavaScript-->
 <?php $version='?v='.date('YmdHis'); ?>

 <script src="<?= base_url('vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= base_url('vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('js/sb-admin-2.min.js') ?>"></script>

<!-- Cargar los scripts dinámicamente -->
<?php if (isset($scripts) && is_array($scripts)): ?>
        <?php foreach ($scripts as $script): ?>
            <script src="<?= base_url($script).$version ?>"></script>
        <?php endforeach; ?>
    <?php endif; ?>


