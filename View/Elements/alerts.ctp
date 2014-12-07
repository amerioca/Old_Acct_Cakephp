<div id="ajaxError" class="<? echo ($alert==1) ? '' : 'mzhidden'; ?>">
<div class="alert alert-danger">
    <i class="fa fa-ban"></i>
    <span id="flashMessage"><?php echo $this->Session->flash(); ?></span>
</div>
</div>


<div class="alert alert-danger <? echo ($alert==2) ? '' : 'mzhidden'; ?>">
    <i class="fa fa-ban"></i>
    <span id="error"><?php echo $this->Session->flash(); ?></span>
</div>
<div class="alert alert-success <? echo ($alert==3) ? '' : 'mzhidden'; ?>">
    <i class="fa fa fa-check"></i>
    <span id="success"><?php echo $this->Session->flash(); ?></span>
</div>