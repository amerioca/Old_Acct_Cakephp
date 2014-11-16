
    <script src="/js/jquery.mobile/demos/js/jquery.js"></script>
    <script src="/js/jquery.mobile/demos/js/jquery.mobile-1.4.3.min.js"></script>

<div data-role="page" class="jqm-demos" data-quicklinks="true">

<?php echo $this->Html->url(array('plugin' => 'MediaManager', 'controller' => 'media', 'action' => 'manager')); ?>
<div role="main" class="ui-content jqm-content">
    <div data-demo-html="true">
        <div data-role="tabs" id="tabs">
            <div data-role="navbar">
                <ul>
                    <li><a href="#one" data-ajax="false">one</a></li>
                    <li><a href="#two" data-ajax="false">two</a></li>
                    <li><a href="ajax-content-ignore.html" data-ajax="false">three</a></li>
                </ul>
            </div>
            <div id="one" class="ui-body-d ui-content">
                <h1>First tab contents</h1>
            </div>
            <div id="two">
                <ul data-role="listview" data-inset="true">
                    <li><a href="#">Acura</a></li>
                    <li><a href="#">Audi</a></li>
                    <li><a href="#">BMW</a></li>
                    <li><a href="#">Cadillac</a></li>
                    <li><a href="#">Ferrari</a></li>
                </ul>
            </div>
        </div>
    </div>

</div><!-- /content -->

</div>
