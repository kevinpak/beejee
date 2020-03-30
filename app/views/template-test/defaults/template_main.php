<body class="x-page">
<div class="container">
<div class="row">
<div class="col-md-12 col-sm-12 col-xs-12">


<div class="wrapper">
<?php
$this->view->load('pages/header_view',$data);
?>

<main class="main i-scroll-vert">
<?php
$this->view->load('pages/'.$template_view,$data);
?>
</main>

<?php
$this->view->load('pages/footer_view',$data);
?>
</div>
</div>
</div>
</div>
</body>
