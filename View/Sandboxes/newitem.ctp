<div id="page-content-wrapper">


<?php echo $this->element('newsite'); ?>

<script src="https://d3jruo7yef7z6a.cloudfront.net/assets/javascripts/e1eda1fa455246d80e1c1c57188b7e3f-trial_modal.min.js"></script>

    <?php echo $this->element('alerts'); ?>

<script>
    var id = 0;
    var Routes = {
        saveItem:"/item/save"
    }
</script>
<div class="box">
<div class="box-header">
    <h3 class="box-title">New Item</h3>
</div>
<div class="box-body table-responsive">

<script>
    var category = "";
    var unitSizeArrJson = [
        ["1oz", "1.00"],
        ["4oz", "4.00"],
        ["5oz", "5.00"],
        ["5.75oz", "5.75"],
        ["8oz", "8.00"],
        ["8.5oz", "8.50"],
        ["10oz", "10.00"],
        ["12.8oz", "12.80"],
        ["16oz", "16.00"],
        ["17.5oz", "17.50"],
        ["32oz", "32.00"],
        ["64oz", "64.00"],
        ["175ml", "5.92"],
        ["180ml", "6.09"],
        ["187ml", "6.32"],
        ["200ml", "6.76"],
        ["250ml", "8.45"],
        ["300ml", "10.14"],
        ["350ml", "11.83"],
        ["365ml", "12.34"],
        ["375ml", "12.68"],
        ["500ml", "16.91"],
        ["700ml", "23.67"],
        ["720ml", "24.35"],
        ["750ml", "25.36"],
        ["1L", "33.81"],
        ["1.5L", "50.72"],
        ["1.75L", "59.17"],
        ["1.8L", "60.87"],
        ["3L", "101.44"],
        ["5L", "169.07"],
        ["6L", "202.88"],
        ["9L", "304.33"],
        ["10L", "338.14"],
        ["18L", "608.65"],
        ["19.5L", "659.37"],
        ["20L", "676.28"],
        ["1gal", "128.00"],
        ["1.32gal", "168.96"],
        ["3.875gal", "496"],
        ["5gal", "640"],
        ["5.16gal", "660.48"],
        ["6.6gal", "844.8"],
        ["7.75gal", "992"],
        ["9.2gal", "1177.6"],
        ["13.2gal", "1689.6"],
        ["15.5gal", "1984"],
        ["11oz", "11"],
        ["11.2oz", "11.2"],
        ["12oz", "12"],
        ["12.8oz", "12.8"],
        ["14.9oz", "14.9"],
        ["16oz", "16"],
        ["16.9oz", "16.9"],
        ["17oz", "17"],
        ["19.2oz", "19.2"],
        ["20oz", "20"],
        ["22oz", "22"],
        ["23.7oz", "23.7"],
        ["24oz", "24"],
        ["25oz", "25"],
        ["25.4oz", "25.4"],
        ["32oz", "32"],
        ["33oz", "33"],
        ["50.7oz", "50.7"],
        ["200ml", "6.76"],
        ["250ml", "8.45"],
        ["330ml", "11.15"],
        ["341ml", "11.53"],
        ["375ml", "12.68"],
        ["500ml", "16.91"],
        ["750ml", "25.36"],
        ["946ml", "31.99"],
        ["1L", "33.81"],
        ["1.5L", "50.72"],
        ["1.75L", "59.17"],
        ["1.8L", "60.87"],
        ["3L", "101.44"],
        ["5L", "169.07"],
        ["6L", "202.88"],
        ["9L", "304.33"],
        ["10L", "338.14"],
        ["18L", "608.65"],
        ["19.5L", "659.37"],
        ["20L", "676.28"],
        ["30L", "1014.42"],
        ["50L", "1690.7"],
        ["1.32gal", "168.96"],
        ["3.875gal", "496"],
        ["5gal", "640"],
        ["5.16gal", "660.48"],
        ["5.3gal", "678.4"],
        ["6.6gal", "844.8"],
        ["7.75gal", "992"],
        ["7.9gal", "1011.2"],
        ["9.2gal", "1177.6"],
        ["13.2gal", "1689.6"],
        ["15.5gal", "1984"],
        ["Indiv.", "0"],
        ["175ml", "5.92"],
        ["180ml", "6.09"],
        ["187ml", "6.32"],
        ["200ml", "6.76"],
        ["250ml", "8.45"],
        ["300ml", "10.14"],
        ["350ml", "11.83"],
        ["365ml", "12.34"],
        ["375ml", "12.68"],
        ["500ml", "16.91"],
        ["720ml", "24.35"],
        ["750ml", "25.36"],
        ["1L", "33.81"],
        ["1.5L", "50.72"],
        ["1.75L", "59.17"],
        ["1.8L", "60.87"],
        ["3L", "101.44"],
        ["5L", "169.07"],
        ["6L", "202.88"],
        ["9L", "304.33"],
        ["10L", "338.14"],
        ["18L", "608.65"],
        ["19.5L", "659.37"],
        ["20L", "676.28"],
        ["2.5oz", "2.5"],
        ["5oz", "5"],
        ["6.8oz", "6.8"],
        ["8oz", "8"],
        ["10oz", "10"],
        ["11oz", "11"],
        ["12oz", "12"],
        ["12.8oz", "12.8"],
        ["14.9oz", "14.9"],
        ["16oz", "16"],
        ["17.5oz", "17.5"],
        ["22oz", "22"],
        ["24oz", "24"],
        ["1gal", "128.00"],
        ["1.32gal", "168.96"],
        ["3.875gal", "496"],
        ["5gal", "640"],
        ["5.16gal", "660.48"],
        ["6.6gal", "844.8"],
        ["7.75gal", "992"],
        ["9.2gal", "1177.6"],
        ["13.2gal", "1689.6"],
        ["15.5gal", "1984"]
    ]

    // Setup itemDynamicSelect
    $(function () {
        $("tab-content").itemDynamicSelect({
            "categoryId":"category",
            "typeId":"item_type",
            "varietyId":"variety",
            "countryId":"country",
            "regionId":"region",
            "appellationId":"appellation"
        });
    });
</script>

<div class="nav-tabs-custom">
<ul class="nav nav-tabs" id="itemTabs">
    <li class="active"><a href="#item" data-toggle="tab">Item</a></li>
    <li><a href="#pricing" data-toggle="tab">Pricing</a></li>
    <li><a href="#order" data-toggle="tab">Order</a></li>
    <li class="pull-right"><a href="#" class="required-text"><span class="text-danger"> <span
            class="text-danger">*</span></span> Required</a></li>
</ul>

<form class="form-horizontal" role="form">
<div class="tab-content form-tab">
<div class="tab-pane active" id="item">

<!-- CATEGORY -->
<div class="form-group item-category">
    <label for="category" class="control-label col-sm-2 text-right">Category <span class="text-danger"> <span
            class="text-danger">*</span></span></label>

    <div class="col-sm-10">

        <select class="form-control form-select" id="category">
            <option disabled="disabled" selected="selected" value="0">Select an Item Category...</option>

            <option value="Wine">Wine</option>

            <option value="Spirits">Spirits</option>

            <option value="Beer">Beer</option>

            <option value="Beverages">Beverages</option>

            <option value="Other">Other</option>

        </select>

    </div>
</div>

<!-- ITEM NAME -->
<div class="form-group mzhidden" data-belongs-to="all-types">
    <label for="item_name" class="control-label col-sm-2 text-right">Item <span class="text-danger">*</span></label>

    <div class="col-sm-10">
        <input type="text" class="form-control" id="item_name" value="" placeholder="Item">
    </div>
</div>

<!-- UNIT SIZE -->

<div class="form-group mzhidden" data-belongs-to="wine-spirits">
    <label class="control-label col-sm-2 text-right">Unit Size <span class="text-danger">*</span></label>

    <div class="col-sm-10">
        <select class="form-control form-select unit_size">
            <option value="" disabled="disabled" selected="selected">Select a Unit Size</option>

            <option value="1oz">1oz</option>

            <option value="4oz">4oz</option>

            <option value="5oz">5oz</option>

            <option value="5.75oz">5.75oz</option>

            <option value="8oz">8oz</option>

            <option value="8.5oz">8.5oz</option>

            <option value="10oz">10oz</option>

            <option value="12.8oz">12.8oz</option>

            <option value="16oz">16oz</option>

            <option value="17.5oz">17.5oz</option>

            <option value="32oz">32oz</option>

            <option value="64oz">64oz</option>

            <option value="175ml">175ml</option>

            <option value="180ml">180ml</option>

            <option value="187ml">187ml</option>

            <option value="200ml">200ml</option>

            <option value="250ml">250ml</option>

            <option value="300ml">300ml</option>

            <option value="350ml">350ml</option>

            <option value="365ml">365ml</option>

            <option value="375ml">375ml</option>

            <option value="500ml">500ml</option>

            <option value="700ml">700ml</option>

            <option value="720ml">720ml</option>

            <option value="750ml">750ml</option>

            <option value="1L">1L</option>

            <option value="1.5L">1.5L</option>

            <option value="1.75L">1.75L</option>

            <option value="1.8L">1.8L</option>

            <option value="3L">3L</option>

            <option value="5L">5L</option>

            <option value="6L">6L</option>

            <option value="9L">9L</option>

            <option value="10L">10L</option>

            <option value="18L">18L</option>

            <option value="19.5L">19.5L</option>

            <option value="20L">20L</option>

            <option value="1gal">1gal</option>

            <option value="1.32gal">1.32gal</option>

            <option value="3.875gal">3.875gal</option>

            <option value="5gal">5gal</option>

            <option value="5.16gal">5.16gal</option>

            <option value="6.6gal">6.6gal</option>

            <option value="7.75gal">7.75gal</option>

            <option value="9.2gal">9.2gal</option>

            <option value="13.2gal">13.2gal</option>

            <option value="15.5gal">15.5gal</option>

        </select>
    </div>
</div>


<div class="form-group mzhidden" data-belongs-to="beer">
    <label class="control-label col-sm-2 text-right">Unit Size <span class="text-danger">*</span></label>

    <div class="col-sm-10">
        <select class="form-control form-select unit_size">
            <option value="" disabled="disabled" selected="selected">Select a Unit Size...</option>

            <option value="11oz">11oz</option>

            <option value="11.2oz">11.2oz</option>

            <option value="12oz">12oz</option>

            <option value="12.8oz">12.8oz</option>

            <option value="14.9oz">14.9oz</option>

            <option value="16oz">16oz</option>

            <option value="16.9oz">16.9oz</option>

            <option value="17oz">17oz</option>

            <option value="19.2oz">19.2oz</option>

            <option value="20oz">20oz</option>

            <option value="22oz">22oz</option>

            <option value="23.7oz">23.7oz</option>

            <option value="24oz">24oz</option>

            <option value="25oz">25oz</option>

            <option value="25.4oz">25.4oz</option>

            <option value="32oz">32oz</option>

            <option value="33oz">33oz</option>

            <option value="50.7oz">50.7oz</option>

            <option value="200ml">200ml</option>

            <option value="250ml">250ml</option>

            <option value="330ml">330ml</option>

            <option value="341ml">341ml</option>

            <option value="375ml">375ml</option>

            <option value="500ml">500ml</option>

            <option value="750ml">750ml</option>

            <option value="946ml">946ml</option>

            <option value="1L">1L</option>

            <option value="1.5L">1.5L</option>

            <option value="1.75L">1.75L</option>

            <option value="1.8L">1.8L</option>

            <option value="3L">3L</option>

            <option value="5L">5L</option>

            <option value="6L">6L</option>

            <option value="9L">9L</option>

            <option value="10L">10L</option>

            <option value="18L">18L</option>

            <option value="19.5L">19.5L</option>

            <option value="20L">20L</option>

            <option value="30L">30L</option>

            <option value="50L">50L</option>

            <option value="1.32gal">1.32gal</option>

            <option value="3.875gal">3.875gal</option>

            <option value="5gal">5gal</option>

            <option value="5.16gal">5.16gal</option>

            <option value="5.3gal">5.3gal</option>

            <option value="6.6gal">6.6gal</option>

            <option value="7.75gal">7.75gal</option>

            <option value="7.9gal">7.9gal</option>

            <option value="9.2gal">9.2gal</option>

            <option value="13.2gal">13.2gal</option>

            <option value="15.5gal">15.5gal</option>

        </select>
    </div>
</div>


<div class="form-group mzhidden" data-belongs-to="beverages">
    <label class="control-label col-sm-2 text-right">Unit Size <span class="text-danger">*</span></label>

    <div class="col-sm-10">
        <select class="form-control form-select unit_size">
            <option value="" disabled="disabled" selected="selected">Select a Unit Size...</option>

            <option value="Indiv.">Indiv.</option>

            <option value="175ml">175ml</option>

            <option value="180ml">180ml</option>

            <option value="187ml">187ml</option>

            <option value="200ml">200ml</option>

            <option value="250ml">250ml</option>

            <option value="300ml">300ml</option>

            <option value="350ml">350ml</option>

            <option value="365ml">365ml</option>

            <option value="375ml">375ml</option>

            <option value="500ml">500ml</option>

            <option value="720ml">720ml</option>

            <option value="750ml">750ml</option>

            <option value="1L">1L</option>

            <option value="1.5L">1.5L</option>

            <option value="1.75L">1.75L</option>

            <option value="1.8L">1.8L</option>

            <option value="3L">3L</option>

            <option value="5L">5L</option>

            <option value="6L">6L</option>

            <option value="9L">9L</option>

            <option value="10L">10L</option>

            <option value="18L">18L</option>

            <option value="19.5L">19.5L</option>

            <option value="20L">20L</option>

            <option value="5oz">5oz</option>

            <option value="6.8oz">6.8oz</option>

            <option value="8oz">8oz</option>

            <option value="10oz">10oz</option>

            <option value="11oz">11oz</option>

            <option value="12oz">12oz</option>

            <option value="12.8oz">12.8oz</option>

            <option value="14.9oz">14.9oz</option>

            <option value="16oz">16oz</option>

            <option value="17.5oz">17.5oz</option>

            <option value="22oz">22oz</option>

            <option value="24oz">24oz</option>

            <option value="1.32gal">1.32gal</option>

            <option value="3.875gal">3.875gal</option>

            <option value="5gal">5gal</option>

            <option value="5.16gal">5.16gal</option>

            <option value="6.6gal">6.6gal</option>

            <option value="7.75gal">7.75gal</option>

            <option value="9.2gal">9.2gal</option>

            <option value="13.2gal">13.2gal</option>

            <option value="15.5gal">15.5gal</option>

            <option value="1.32gal">1.32gal</option>

            <option value="3.875gal">3.875gal</option>

            <option value="5gal">5gal</option>

            <option value="5.16gal">5.16gal</option>

            <option value="6.6gal">6.6gal</option>

            <option value="7.75gal">7.75gal</option>

            <option value="9.2gal">9.2gal</option>

            <option value="13.2gal">13.2gal</option>

            <option value="15.5gal">15.5gal</option>

        </select>
    </div>
</div>


<div class="form-group mzhidden" data-belongs-to="other">
    <label class="control-label col-sm-2 text-right">Unit Size <span class="text-danger">*</span></label>

    <div class="col-sm-10">
        <select class="form-control form-select unit_size">
            <option value="" disabled="disabled" selected="selected">Select a Unit Size...</option>

            <option value="Indiv.">Indiv.</option>

            <option value="175ml">175ml</option>

            <option value="180ml">180ml</option>

            <option value="187ml">187ml</option>

            <option value="200ml">200ml</option>

            <option value="250ml">250ml</option>

            <option value="300ml">300ml</option>

            <option value="350ml">350ml</option>

            <option value="365ml">365ml</option>

            <option value="375ml">375ml</option>

            <option value="500ml">500ml</option>

            <option value="720ml">720ml</option>

            <option value="750ml">750ml</option>

            <option value="1L">1L</option>

            <option value="1.5L">1.5L</option>

            <option value="1.75L">1.75L</option>

            <option value="1.8L">1.8L</option>

            <option value="3L">3L</option>

            <option value="5L">5L</option>

            <option value="6L">6L</option>

            <option value="9L">9L</option>

            <option value="10L">10L</option>

            <option value="18L">18L</option>

            <option value="19.5L">19.5L</option>

            <option value="20L">20L</option>

            <option value="2.5oz">2.5oz</option>

            <option value="5oz">5oz</option>

            <option value="6.8oz">6.8oz</option>

            <option value="8oz">8oz</option>

            <option value="10oz">10oz</option>

            <option value="11oz">11oz</option>

            <option value="12oz">12oz</option>

            <option value="12.8oz">12.8oz</option>

            <option value="14.9oz">14.9oz</option>

            <option value="16oz">16oz</option>

            <option value="17.5oz">17.5oz</option>

            <option value="22oz">22oz</option>

            <option value="24oz">24oz</option>

            <option value="1gal">1gal</option>

            <option value="1.32gal">1.32gal</option>

            <option value="3.875gal">3.875gal</option>

            <option value="5gal">5gal</option>

            <option value="5.16gal">5.16gal</option>

            <option value="6.6gal">6.6gal</option>

            <option value="7.75gal">7.75gal</option>

            <option value="9.2gal">9.2gal</option>

            <option value="13.2gal">13.2gal</option>

            <option value="15.5gal">15.5gal</option>

        </select>
    </div>
</div>

<!-- UNIT COST -->
<div class="form-group" data-belongs-to="all-types">
    <label for="unit_cost" class="control-label col-sm-2 text-right">Unit Cost <span
            class="text-danger">*</span></label>

    <div class="col-sm-10">
        <input type="text" class="form-control text-left" id="unit_cost" value="0.00" maxlength="9"
               data-inputmask="'alias': 'numeric', 'rightAlign': false, 'autoGroup': true, 'radixPoint': '.', 'placeholder': '0', 'clearMaskOnLostFocus': false, 'digits': 2, 'digitsOptional': false"
               data-mask>
    </div>
</div>

<!-- BIN -->
<div class="form-group mzhidden" data-belongs-to="all-types">
    <label for="bin" class="control-label col-sm-2 text-right">Bin</label>

    <div class="col-sm-10">
        <input type="text" class="form-control" id="bin" value="" maxlength="4">
    </div>
</div>


<hr>

<!-- DISTRIBUTED BY -->
<div class="form-group mzhidden" data-belongs-to="all-types">
    <label for="dcode" class="control-label col-sm-2 text-right">Distributor</label>

    <div class="col-sm-10">
        <select class="form-control form-select" id="dcode">

            <option value="BDD">Beer Demo Distributor</option>

            <option value="WSD">Wine &amp; Spirits Demo Distributor</option>

        </select>
    </div>
</div>


<!-- SKU -->
<div class="form-group mzhidden" data-belongs-to="all-types">
    <label for="sku" class="control-label col-sm-2 text-right">SKU</label>

    <div class="col-sm-10">
        <input type="text" class="form-control" id="sku" value="" maxlength="6" placeholder="Enter SKU if known">
    </div>
</div>

<hr>

<!-- PRODUCER -->
<div class="form-group mzhidden" data-belongs-to="all-types">
    <label for="producer" class="control-label col-sm-2 text-right">Producer</label>

    <div class="col-sm-10">
        <input type="text" class="form-control" id="producer" value="" placeholder="Producer">
    </div>
</div>

<!-- UPC -->
<div class="form-group mzhidden" data-belongs-to="all-types">
    <label for="upc" class="control-label col-sm-2 text-right">UPC</label>

    <div class="col-sm-10">
        <input type="text" class="form-control" id="upc" value="" maxlength="13" placeholder="Enter UPC if known">
    </div>
</div>

<!-- ITEM TYPE -->
<div class="form-group mzhidden" data-belongs-to="all-types">
    <label for="item_type" class="control-label col-sm-2 text-right">Type</label>

    <div class="col-sm-10">

        <select class="form-control form-select" id="item_type">

            <option data-belongs-to="Wine" value="" selected="selected"></option>

            <option data-belongs-to="Wine" value="Red">Red</option>

            <option data-belongs-to="Wine" value="White">White</option>

            <option data-belongs-to="Wine" value="Blush/Rose">Blush/Rose</option>

            <option data-belongs-to="Wine" value="Sparkling">Sparkling</option>

            <option data-belongs-to="Wine" value="Fortified">Fortified</option>

            <option data-belongs-to="Wine" value="Dessert">Dessert</option>

            <option data-belongs-to="Wine" value="Fruit">Fruit</option>

            <option data-belongs-to="Wine" value="Sake">Sake</option>

            <option data-belongs-to="Wine" value="Other">Other</option>

            <option data-belongs-to="Spirits" value="" selected="selected"></option>

            <option data-belongs-to="Spirits" value="Bitters">Bitters</option>

            <option data-belongs-to="Spirits" value="Vodka">Vodka</option>

            <option data-belongs-to="Spirits" value="Gin">Gin</option>

            <option data-belongs-to="Spirits" value="Whisky">Whisky</option>

            <option data-belongs-to="Spirits" value="Brandy">Brandy</option>

            <option data-belongs-to="Spirits" value="Rum">Rum</option>

            <option data-belongs-to="Spirits" value="Tequila">Tequila</option>

            <option data-belongs-to="Spirits" value="Liqueur">Liqueur</option>

            <option data-belongs-to="Spirits" value="Vermouth">Vermouth</option>

            <option data-belongs-to="Spirits" value="Other">Other</option>

            <option data-belongs-to="Beer" value="" selected="selected"></option>

            <option data-belongs-to="Beer" value="Ale">Ale</option>

            <option data-belongs-to="Beer" value="Amber Ale">Amber Ale</option>

            <option data-belongs-to="Beer" value="Amber Lager">Amber Lager</option>

            <option data-belongs-to="Beer" value="Barley Wine">Barley Wine</option>

            <option data-belongs-to="Beer" value="Barrel Aged">Barrel Aged</option>

            <option data-belongs-to="Beer" value="Belgian Blonde">Belgian Blonde</option>

            <option data-belongs-to="Beer" value="Belgian Dark">Belgian Dark</option>

            <option data-belongs-to="Beer" value="Belgian Dubbel">Belgian Dubbel</option>

            <option data-belongs-to="Beer" value="Belgian Pale">Belgian Pale</option>

            <option data-belongs-to="Beer" value="Belgian Tripel">Belgian Tripel</option>

            <option data-belongs-to="Beer" value="Belgian White">Belgian White</option>

            <option data-belongs-to="Beer" value="Blonde Ale">Blonde Ale</option>

            <option data-belongs-to="Beer" value="Bock">Bock</option>

            <option data-belongs-to="Beer" value="Brown Ale">Brown Ale</option>

            <option data-belongs-to="Beer" value="Cider">Cider</option>

            <option data-belongs-to="Beer" value="Dark Lager">Dark Lager</option>

            <option data-belongs-to="Beer" value="ESB">ESB</option>

            <option data-belongs-to="Beer" value="Flavored">Flavored</option>

            <option data-belongs-to="Beer" value="Glutenfree">Glutenfree</option>

            <option data-belongs-to="Beer" value="IPA">IPA</option>

            <option data-belongs-to="Beer" value="Lambic">Lambic</option>

            <option data-belongs-to="Beer" value="Lager">Lager</option>

            <option data-belongs-to="Beer" value="Non-Alcoholic">Non-Alcoholic</option>

            <option data-belongs-to="Beer" value="Pale Ale">Pale Ale</option>

            <option data-belongs-to="Beer" value="Pale Lager">Pale Lager</option>

            <option data-belongs-to="Beer" value="Pilsner">Pilsner</option>

            <option data-belongs-to="Beer" value="Porter">Porter</option>

            <option data-belongs-to="Beer" value="Scottish">Scottish</option>

            <option data-belongs-to="Beer" value="Smoked">Smoked</option>

            <option data-belongs-to="Beer" value="Wheat">Wheat</option>

            <option data-belongs-to="Beer" value="Other">Other</option>

            <option data-belongs-to="Beverages" value="" selected="selected"></option>

            <option data-belongs-to="Beverages" value="Coffee">Coffee</option>

            <option data-belongs-to="Beverages" value="Juice">Juice</option>

            <option data-belongs-to="Beverages" value="Soda">Soda</option>

            <option data-belongs-to="Beverages" value="Tea">Tea</option>

            <option data-belongs-to="Beverages" value="Water">Water</option>

            <option data-belongs-to="Beverages" value="Other">Other</option>

            <option data-belongs-to="Other" value="" selected="selected"></option>

            <option data-belongs-to="Other" value="Dairy">Dairy</option>

            <option data-belongs-to="Other" value="Food">Food</option>

            <option data-belongs-to="Other" value="Garnish">Garnish</option>

            <option data-belongs-to="Other" value="Bitters">Bitters</option>

            <option data-belongs-to="Other" value="Syrup">Syrup</option>

            <option data-belongs-to="Other" value="Mix">Mix</option>

            <option data-belongs-to="Other" value="Tinctures">Tinctures</option>

            <option data-belongs-to="Other" value="Glassware">Glassware</option>

            <option data-belongs-to="Other" value="Misc.">Misc.</option>

            <option data-belongs-to="Other" value="Other">Other</option>

        </select>
    </div>
</div>

<!-- VARIETY -->
<div class="form-group mzhidden" data-belongs-to="all-types">
<label for="variety" class="control-label col-sm-2 text-right">Variety</label>

<div class="col-sm-10">
<select class="form-control form-select" id="variety">

<option data-belongs-to="Red" value="" selected="selected"></option>

<option data-belongs-to="Red" value="Barbera">Barbera</option>

<option data-belongs-to="Red" value="Bordeaux">Bordeaux</option>

<option data-belongs-to="Red" value="Cabernet Franc">Cabernet Franc</option>

<option data-belongs-to="Red" value="Cabernet Sauvignon">Cabernet Sauvignon</option>

<option data-belongs-to="Red" value="Carignane">Carignane</option>

<option data-belongs-to="Red" value="Dolcetto">Dolcetto</option>

<option data-belongs-to="Red" value="Gamay">Gamay</option>

<option data-belongs-to="Red" value="Grenache">Grenache</option>

<option data-belongs-to="Red" value="Lagrein">Lagrein</option>

<option data-belongs-to="Red" value="Malbec">Malbec</option>

<option data-belongs-to="Red" value="Merlot">Merlot</option>

<option data-belongs-to="Red" value="Mourvedre">Mourvedre</option>

<option data-belongs-to="Red" value="Nebbiolo">Nebbiolo</option>

<option data-belongs-to="Red" value="Petite Sirah">Petite Sirah</option>

<option data-belongs-to="Red" value="Pineau d&#x27;Aunis">Pineau d&#x27;Aunis</option>

<option data-belongs-to="Red" value="Pinot Noir">Pinot Noir</option>

<option data-belongs-to="Red" value="Red Blend">Red Blend</option>

<option data-belongs-to="Red" value="Rhone Blends">Rhone Blends</option>

<option data-belongs-to="Red" value="Sangiovese">Sangiovese</option>

<option data-belongs-to="Red" value="Shiraz/Syrah">Shiraz/Syrah</option>

<option data-belongs-to="Red" value="Tempranillo">Tempranillo</option>

<option data-belongs-to="Red" value="Zinfandel">Zinfandel</option>

<option data-belongs-to="Red" value="Other">Other</option>

<option data-belongs-to="White" value="" selected="selected"></option>

<option data-belongs-to="White" value="Chardonnay">Chardonnay</option>

<option data-belongs-to="White" value="Chenin Blanc">Chenin Blanc</option>

<option data-belongs-to="White" value="Gewurztraminer">Gewurztraminer</option>

<option data-belongs-to="White" value="Gruner Veltliner">Gruner Veltliner</option>

<option data-belongs-to="White" value="Melon de Bourgogne">Melon de Bourgogne</option>

<option data-belongs-to="White" value="Pinot Blanc">Pinot Blanc</option>

<option data-belongs-to="White" value="Pinot Grigio">Pinot Grigio</option>

<option data-belongs-to="White" value="Pinot Gris">Pinot Gris</option>

<option data-belongs-to="White" value="Riesling">Riesling</option>

<option data-belongs-to="White" value="Romorantin">Romorantin</option>

<option data-belongs-to="White" value="Sauvignon Blanc">Sauvignon Blanc</option>

<option data-belongs-to="White" value="Semillon">Semillon</option>

<option data-belongs-to="White" value="Viognier">Viognier</option>

<option data-belongs-to="White" value="White Blend">White Blend</option>

<option data-belongs-to="White" value="White Zinfandel">White Zinfandel</option>

<option data-belongs-to="White" value="Other">Other</option>

<option data-belongs-to="Sparkling" value="" selected="selected"></option>

<option data-belongs-to="Sparkling" value="Champagne">Champagne</option>

<option data-belongs-to="Sparkling" value="Other">Other</option>

<option data-belongs-to="Fortified" value="" selected="selected"></option>

<option data-belongs-to="Fortified" value="Sherry">Sherry</option>

<option data-belongs-to="Fortified" value="Other">Other</option>

<option data-belongs-to="Dessert" value="" selected="selected"></option>

<option data-belongs-to="Dessert" value="Port">Port</option>

<option data-belongs-to="Dessert" value="Other">Other</option>

<option data-belongs-to="Gin" value="" selected="selected"></option>

<option data-belongs-to="Gin" value="London Dry">London Dry</option>

<option data-belongs-to="Gin" value="Other Dry">Other Dry</option>

<option data-belongs-to="Gin" value="Plymouth">Plymouth</option>

<option data-belongs-to="Gin" value="Old Tom">Old Tom</option>

<option data-belongs-to="Gin" value="Holland/Genever">Holland/Genever</option>

<option data-belongs-to="Gin" value="German">German</option>

<option data-belongs-to="Gin" value="Flavored">Flavored</option>

<option data-belongs-to="Gin" value="Raki">Raki</option>

<option data-belongs-to="Gin" value="Ouzo">Ouzo</option>

<option data-belongs-to="Gin" value="Absinthe">Absinthe</option>

<option data-belongs-to="Gin" value="Pernod">Pernod</option>

<option data-belongs-to="Gin" value="Pastis">Pastis</option>

<option data-belongs-to="Gin" value="Akvavit">Akvavit</option>

<option data-belongs-to="Gin" value="Pacharan/Sloe">Pacharan/Sloe</option>

<option data-belongs-to="Gin" value="Other">Other</option>

<option data-belongs-to="Whisky" value="" selected="selected"></option>

<option data-belongs-to="Whisky" value="American">American</option>

<option data-belongs-to="Whisky" value="Bourbon">Bourbon</option>

<option data-belongs-to="Whisky" value="Canadian">Canadian</option>

<option data-belongs-to="Whisky" value="Rye">Rye</option>

<option data-belongs-to="Whisky" value="Wheat">Wheat</option>

<option data-belongs-to="Whisky" value="Corn">Corn</option>

<option data-belongs-to="Whisky" value="Tennessee">Tennessee</option>

<option data-belongs-to="Whisky" value="Single Malt">Single Malt</option>

<option data-belongs-to="Whisky" value="Pure Malt">Pure Malt</option>

<option data-belongs-to="Whisky" value="Single Grain">Single Grain</option>

<option data-belongs-to="Whisky" value="Grain">Grain</option>

<option data-belongs-to="Whisky" value="Japanese">Japanese</option>

<option data-belongs-to="Whisky" value="Irish">Irish</option>

<option data-belongs-to="Whisky" value="Blended Malt">Blended Malt</option>

<option data-belongs-to="Whisky" value="Blended">Blended</option>

<option data-belongs-to="Whisky" value="Flavored">Flavored</option>

<option data-belongs-to="Whisky" value="Pure Pot Still">Pure Pot Still</option>

<option data-belongs-to="Whisky" value="Scotch">Scotch</option>

<option data-belongs-to="Whisky" value="Other">Other</option>

<option data-belongs-to="Brandy" value="" selected="selected"></option>

<option data-belongs-to="Brandy" value="Cognac">Cognac</option>

<option data-belongs-to="Brandy" value="Armagnac">Armagnac</option>

<option data-belongs-to="Brandy" value="Marc">Marc</option>

<option data-belongs-to="Brandy" value="Other French">Other French</option>

<option data-belongs-to="Brandy" value="California">California</option>

<option data-belongs-to="Brandy" value="Weinbrand">Weinbrand</option>

<option data-belongs-to="Brandy" value="Alter/Uralt">Alter/Uralt</option>

<option data-belongs-to="Brandy" value="Vecchio, V.S.O.P.">Vecchio, V.S.O.P.</option>

<option data-belongs-to="Brandy" value="Grappa">Grappa</option>

<option data-belongs-to="Brandy" value="Spanish">Spanish</option>

<option data-belongs-to="Brandy" value="Aguardente da Lourinha">Aguardente da Lourinha</option>

<option data-belongs-to="Brandy" value="Grand Fine">Grand Fine</option>

<option data-belongs-to="Brandy" value="Israeli">Israeli</option>

<option data-belongs-to="Brandy" value="Pot Still">Pot Still</option>

<option data-belongs-to="Brandy" value="Blended">Blended</option>

<option data-belongs-to="Brandy" value="Vintage">Vintage</option>

<option data-belongs-to="Brandy" value="Mexican">Mexican</option>

<option data-belongs-to="Brandy" value="Pisco">Pisco</option>

<option data-belongs-to="Brandy" value="Matured">Matured</option>

<option data-belongs-to="Brandy" value="Old">Old</option>

<option data-belongs-to="Brandy" value="Very Old">Very Old</option>

<option data-belongs-to="Brandy" value="Apple">Apple</option>

<option data-belongs-to="Brandy" value="Pear">Pear</option>

<option data-belongs-to="Brandy" value="Apricot">Apricot</option>

<option data-belongs-to="Brandy" value="Cherry">Cherry</option>

<option data-belongs-to="Brandy" value="Plum">Plum</option>

<option data-belongs-to="Brandy" value="Blackberry">Blackberry</option>

<option data-belongs-to="Brandy" value="Elderberry">Elderberry</option>

<option data-belongs-to="Brandy" value="Raspberry">Raspberry</option>

<option data-belongs-to="Brandy" value="Strawberry">Strawberry</option>

<option data-belongs-to="Brandy" value="Other Fruit">Other Fruit</option>

<option data-belongs-to="Brandy" value="Fruit Blend">Fruit Blend</option>

<option data-belongs-to="Brandy" value="Other">Other</option>

<option data-belongs-to="Rum" value="" selected="selected"></option>

<option data-belongs-to="Rum" value="American">American</option>

<option data-belongs-to="Rum" value="Barbados">Barbados</option>

<option data-belongs-to="Rum" value="Guyana">Guyana</option>

<option data-belongs-to="Rum" value="Jamaica">Jamaica</option>

<option data-belongs-to="Rum" value="Other British">Other British</option>

<option data-belongs-to="Rum" value="Cuba">Cuba</option>

<option data-belongs-to="Rum" value="Central America">Central America</option>

<option data-belongs-to="Rum" value="Puerto Rico">Puerto Rico</option>

<option data-belongs-to="Rum" value="Other Spanish">Other Spanish</option>

<option data-belongs-to="Rum" value="Guadeloupe">Guadeloupe</option>

<option data-belongs-to="Rum" value="Haiti">Haiti</option>

<option data-belongs-to="Rum" value="Martinique">Martinique</option>

<option data-belongs-to="Rum" value="Grenada">Grenada</option>

<option data-belongs-to="Rum" value="Other French">Other French</option>

<option data-belongs-to="Rum" value="Fruit">Fruit</option>

<option data-belongs-to="Rum" value="Spiced">Spiced</option>

<option data-belongs-to="Rum" value="Other White">Other White</option>

<option data-belongs-to="Rum" value="Other Gold">Other Gold</option>

<option data-belongs-to="Rum" value="Other Dark/Black">Other Dark/Black</option>

<option data-belongs-to="Rum" value="Arrack">Arrack</option>

<option data-belongs-to="Rum" value="Cachaca">Cachaca</option>

<option data-belongs-to="Rum" value="Other">Other</option>

<option data-belongs-to="Tequila" value="" selected="selected"></option>

<option data-belongs-to="Tequila" value="Blanco">Blanco</option>

<option data-belongs-to="Tequila" value="Joven Abocado">Joven Abocado</option>

<option data-belongs-to="Tequila" value="Reposado">Reposado</option>

<option data-belongs-to="Tequila" value="Anejo">Anejo</option>

<option data-belongs-to="Tequila" value="Extra-Anejo">Extra-Anejo</option>

<option data-belongs-to="Tequila" value="Bacanora">Bacanora</option>

<option data-belongs-to="Tequila" value="Comiteca">Comiteca</option>

<option data-belongs-to="Tequila" value="Mezcal">Mezcal</option>

<option data-belongs-to="Tequila" value="Raicilla">Raicilla</option>

<option data-belongs-to="Tequila" value="Sotol">Sotol</option>

<option data-belongs-to="Tequila" value="Other">Other</option>

<option data-belongs-to="Liqueur" value="" selected="selected"></option>

<option data-belongs-to="Liqueur" value="Aperitif">Aperitif</option>

<option data-belongs-to="Liqueur" value="Bitters">Bitters</option>

<option data-belongs-to="Liqueur" value="Orange">Orange</option>

<option data-belongs-to="Liqueur" value="Apple">Apple</option>

<option data-belongs-to="Liqueur" value="Melon">Melon</option>

<option data-belongs-to="Liqueur" value="Cherry">Cherry</option>

<option data-belongs-to="Liqueur" value="Black Raspberry">Black Raspberry</option>

<option data-belongs-to="Liqueur" value="Other Fruit">Other Fruit</option>

<option data-belongs-to="Liqueur" value="Mint">Mint</option>

<option data-belongs-to="Liqueur" value="Violet">Violet</option>

<option data-belongs-to="Liqueur" value="Aniseed">Aniseed</option>

<option data-belongs-to="Liqueur" value="Cinnamon">Cinnamon</option>

<option data-belongs-to="Liqueur" value="Herbs">Herbs</option>

<option data-belongs-to="Liqueur" value="Other Herbal">Other Herbal</option>

<option data-belongs-to="Liqueur" value="Almond">Almond</option>

<option data-belongs-to="Liqueur" value="Hazelnut">Hazelnut</option>

<option data-belongs-to="Liqueur" value="Cacao">Cacao</option>

<option data-belongs-to="Liqueur" value="Coffee">Coffee</option>

<option data-belongs-to="Liqueur" value="Coconut">Coconut</option>

<option data-belongs-to="Liqueur" value="Egg">Egg</option>

<option data-belongs-to="Liqueur" value="Coffee">Coffee</option>

<option data-belongs-to="Liqueur" value="Scotch Whisky">Scotch Whisky</option>

<option data-belongs-to="Liqueur" value="Bourbon">Bourbon</option>

<option data-belongs-to="Liqueur" value="Other">Other</option>

</select>
</div>
</div>

<!-- COUNTRY -->
<div class="form-group mzhidden" data-belongs-to="all-types">
    <label for="country" class="control-label col-sm-2 text-right">Country</label>

    <div class="col-sm-10">
        <select class="form-control form-select" id="country">

            <option value="" selected="selected"></option>

            <option value="Argentina">Argentina</option>

            <option value="Australia">Australia</option>

            <option value="Austria">Austria</option>

            <option value="Brazil">Brazil</option>

            <option value="Canada">Canada</option>

            <option value="Caribbean">Caribbean</option>

            <option value="Central America">Central America</option>

            <option value="Chile">Chile</option>

            <option value="Cuba">Cuba</option>

            <option value="Eastern Europe">Eastern Europe</option>

            <option value="England">England</option>

            <option value="France">France</option>

            <option value="Finland">Finland</option>

            <option value="Germany">Germany</option>

            <option value="Greece">Greece</option>

            <option value="Holland">Holland</option>

            <option value="Hungary">Hungary</option>

            <option value="India">India</option>

            <option value="Israel">Israel</option>

            <option value="Italy">Italy</option>

            <option value="Ireland">Ireland</option>

            <option value="Japan">Japan</option>

            <option value="Mexico">Mexico</option>

            <option value="New Zealand">New Zealand</option>

            <option value="Peru">Peru</option>

            <option value="Poland">Poland</option>

            <option value="Portugal">Portugal</option>

            <option value="Russia">Russia</option>

            <option value="South Africa">South Africa</option>

            <option value="Scotland">Scotland</option>

            <option value="Spain">Spain</option>

            <option value="Sweden">Sweden</option>

            <option value="Switzerland">Switzerland</option>

            <option value="Turkey">Turkey</option>

            <option value="United States">United States</option>

            <option value="Other">Other</option>

        </select>
    </div>
</div>

<!-- REGION -->
<div class="form-group mzhidden" data-belongs-to="all-types">
    <label for="region" class="control-label col-sm-2 text-right">Region</label>

    <div class="col-sm-10">
        <select class="form-control form-select" id="region">

            <option selected="selected" data-belongs-to="Argentina" value=""></option>

            <option data-belongs-to="Argentina" value="Mendoza">Mendoza</option>

            <option data-belongs-to="Argentina" value="Other">Other</option>

            <option selected="selected" data-belongs-to="Australia" value=""></option>

            <option data-belongs-to="Australia" value="New South Wales">New South Wales</option>

            <option data-belongs-to="Australia" value="South Australia">South Australia</option>

            <option data-belongs-to="Australia" value="Victoria">Victoria</option>

            <option data-belongs-to="Australia" value="Western Australia">Western Australia</option>

            <option data-belongs-to="Australia" value="Other">Other</option>

            <option selected="selected" data-belongs-to="Chile" value=""></option>

            <option data-belongs-to="Chile" value="Colchagua Valley">Colchagua Valley</option>

            <option data-belongs-to="Chile" value="Curico Valley">Curico Valley</option>

            <option data-belongs-to="Chile" value="Other">Other</option>

            <option selected="selected" data-belongs-to="France" value=""></option>

            <option data-belongs-to="France" value="Alsace">Alsace</option>

            <option data-belongs-to="France" value="Beaujolais">Beaujolais</option>

            <option data-belongs-to="France" value="Bordeaux">Bordeaux</option>

            <option data-belongs-to="France" value="Burgundy">Burgundy</option>

            <option data-belongs-to="France" value="Chablis">Chablis</option>

            <option data-belongs-to="France" value="Champagne">Champagne</option>

            <option data-belongs-to="France" value="Languedoc-Roussillon">Languedoc-Roussillon</option>

            <option data-belongs-to="France" value="Loire">Loire</option>

            <option data-belongs-to="France" value="Provence">Provence</option>

            <option data-belongs-to="France" value="Rhone">Rhone</option>

            <option data-belongs-to="France" value="Savoie/Jura">Savoie/Jura</option>

            <option data-belongs-to="France" value="Southwest France">Southwest France</option>

            <option data-belongs-to="France" value="Other">Other</option>

            <option selected="selected" data-belongs-to="Germany" value=""></option>

            <option data-belongs-to="Germany" value="Mosel-Saar-Ruwer">Mosel-Saar-Ruwer</option>

            <option data-belongs-to="Germany" value="Nahe">Nahe</option>

            <option data-belongs-to="Germany" value="Pfalz">Pfalz</option>

            <option data-belongs-to="Germany" value="Rheingau">Rheingau</option>

            <option data-belongs-to="Germany" value="Rheinhessen">Rheinhessen</option>

            <option data-belongs-to="Germany" value="Other">Other</option>

            <option selected="selected" data-belongs-to="Italy" value=""></option>

            <option data-belongs-to="Italy" value="Abruzzo">Abruzzo</option>

            <option data-belongs-to="Italy" value="Campania">Campania</option>

            <option data-belongs-to="Italy" value="Emilia Romagna">Emilia Romagna</option>

            <option data-belongs-to="Italy" value="Friuli-Venezia-Giulia">Friuli-Venezia-Giulia</option>

            <option data-belongs-to="Italy" value="Lombardy">Lombardy</option>

            <option data-belongs-to="Italy" value="Marche">Marche</option>

            <option data-belongs-to="Italy" value="Piedmont">Piedmont</option>

            <option data-belongs-to="Italy" value="Puglia">Puglia</option>

            <option data-belongs-to="Italy" value="Sardinia">Sardinia</option>

            <option data-belongs-to="Italy" value="Sicily">Sicily</option>

            <option data-belongs-to="Italy" value="Trentino-Alto Adige">Trentino-Alto Adige</option>

            <option data-belongs-to="Italy" value="Tuscany">Tuscany</option>

            <option data-belongs-to="Italy" value="Umbria">Umbria</option>

            <option data-belongs-to="Italy" value="Veneto">Veneto</option>

            <option data-belongs-to="Italy" value="Other">Other</option>

            <option selected="selected" data-belongs-to="New Zealand" value=""></option>

            <option data-belongs-to="New Zealand" value="North Island">North Island</option>

            <option data-belongs-to="New Zealand" value="South Island">South Island</option>

            <option data-belongs-to="New Zealand" value="Other">Other</option>

            <option selected="selected" data-belongs-to="Portugal" value=""></option>

            <option data-belongs-to="Portugal" value="Madeira">Madeira</option>

            <option data-belongs-to="Portugal" value="North">North</option>

            <option data-belongs-to="Portugal" value="Port">Port</option>

            <option data-belongs-to="Portugal" value="Other">Other</option>

            <option selected="selected" data-belongs-to="Spain" value=""></option>

            <option data-belongs-to="Spain" value="Catalunya">Catalunya</option>

            <option data-belongs-to="Spain" value="Ebro River">Ebro River</option>

            <option data-belongs-to="Spain" value="Navarra">Navarra</option>

            <option data-belongs-to="Spain" value="Northwest">Northwest</option>

            <option data-belongs-to="Spain" value="Penedes">Penedes</option>

            <option data-belongs-to="Spain" value="Priorato">Priorato</option>

            <option data-belongs-to="Spain" value="Rias Baixas">Rias Baixas</option>

            <option data-belongs-to="Spain" value="Ribera del Duero">Ribera del Duero</option>

            <option data-belongs-to="Spain" value="Rioja">Rioja</option>

            <option data-belongs-to="Spain" value="Sherry">Sherry</option>

            <option data-belongs-to="Spain" value="Other">Other</option>

            <option selected="selected" data-belongs-to="United States" value=""></option>

            <option data-belongs-to="United States" value="California">California</option>

            <option data-belongs-to="United States" value="Kentucky">Kentucky</option>

            <option data-belongs-to="United States" value="New York">New York</option>

            <option data-belongs-to="United States" value="Oregon">Oregon</option>

            <option data-belongs-to="United States" value="Washington">Washington</option>

            <option data-belongs-to="United States" value="Other">Other</option>

        </select>
    </div>
</div>

<!-- APPELLATION -->
<div class="form-group mzhidden" data-belongs-to="wine">
    <label for="appellation" class="control-label col-sm-2 text-right">Appellation</label>

    <div class="col-sm-10">
        <select class="form-control form-select" id="appellation">

            <option selected="selected" data-belongs-to="Bordeaux" value=""></option>

            <option data-belongs-to="Bordeaux" value="Cotes de Blaye">Cotes de Blaye</option>

            <option data-belongs-to="Bordeaux" value="Cotes de Castillon">Cotes de Castillon</option>

            <option data-belongs-to="Bordeaux" value="Crus Bourgeois">Crus Bourgeois</option>

            <option data-belongs-to="Bordeaux" value="Fronsac">Fronsac</option>

            <option data-belongs-to="Bordeaux" value="Graves">Graves</option>

            <option data-belongs-to="Bordeaux" value="Haut Medoc">Haut Medoc</option>

            <option data-belongs-to="Bordeaux" value="Margaux">Margaux</option>

            <option data-belongs-to="Bordeaux" value="Medoc">Medoc</option>

            <option data-belongs-to="Bordeaux" value="Lalande-de-Pomerol">Lalande-de-Pomerol</option>

            <option data-belongs-to="Bordeaux" value="Pauillac">Pauillac</option>

            <option data-belongs-to="Bordeaux" value="Pessoac-Leognan">Pessoac-Leognan</option>

            <option data-belongs-to="Bordeaux" value="Pomerol">Pomerol</option>

            <option data-belongs-to="Bordeaux" value="Sauternes">Sauternes</option>

            <option data-belongs-to="Bordeaux" value="St. Estephe">St. Estephe</option>

            <option data-belongs-to="Bordeaux" value="St. Julian">St. Julian</option>

            <option data-belongs-to="Bordeaux" value="Other">Other</option>

            <option selected="selected" data-belongs-to="Burgundy" value=""></option>

            <option data-belongs-to="Burgundy" value="Chambolle Musigny">Chambolle Musigny</option>

            <option data-belongs-to="Burgundy" value="Chassagne Montrachet">Chassagne Montrachet</option>

            <option data-belongs-to="Burgundy" value="Corton">Corton</option>

            <option data-belongs-to="Burgundy" value="Gevrey Chambertin">Gevrey Chambertin</option>

            <option data-belongs-to="Burgundy" value="Meursault">Meursault</option>

            <option data-belongs-to="Burgundy" value="Nuits Saint Georges">Nuits Saint Georges</option>

            <option data-belongs-to="Burgundy" value="Puligny Montrachet">Puligny Montrachet</option>

            <option data-belongs-to="Burgundy" value="Volnay">Volnay</option>

            <option data-belongs-to="Burgundy" value="Vosne Romanee">Vosne Romanee</option>

            <option data-belongs-to="Burgundy" value="Vougeot">Vougeot</option>

            <option data-belongs-to="Burgundy" value="Other">Other</option>

            <option selected="selected" data-belongs-to="Rhone" value=""></option>

            <option data-belongs-to="Rhone" value="Chateauneuf du Pape">Chateauneuf du Pape</option>

            <option data-belongs-to="Rhone" value="Costieres de Nimes">Costieres de Nimes</option>

            <option data-belongs-to="Rhone" value="Cotes de Ventoux">Cotes de Ventoux</option>

            <option data-belongs-to="Rhone" value="Cotes du Rhone">Cotes du Rhone</option>

            <option data-belongs-to="Rhone" value="Crozes Hermitage">Crozes Hermitage</option>

            <option data-belongs-to="Rhone" value="Gigondas">Gigondas</option>

            <option data-belongs-to="Rhone" value="St Joseph">St Joseph</option>

            <option data-belongs-to="Rhone" value="Other">Other</option>

            <option selected="selected" data-belongs-to="Tuscany" value=""></option>

            <option data-belongs-to="Tuscany" value="Bolgheri">Bolgheri</option>

            <option data-belongs-to="Tuscany" value="Brunello di Montalcino">Brunello di Montalcino</option>

            <option data-belongs-to="Tuscany" value="Chianti">Chianti</option>

            <option data-belongs-to="Tuscany" value="Rosso di Montalcino">Rosso di Montalcino</option>

            <option data-belongs-to="Tuscany" value="Super Turscan">Super Turscan</option>

            <option data-belongs-to="Tuscany" value="Other">Other</option>

            <option selected="selected" data-belongs-to="California" value=""></option>

            <option data-belongs-to="California" value="Central Coast">Central Coast</option>

            <option data-belongs-to="California" value="Central Valley">Central Valley</option>

            <option data-belongs-to="California" value="Monterey">Monterey</option>

            <option data-belongs-to="California" value="Napa Valley">Napa Valley</option>

            <option data-belongs-to="California" value="North Coast">North Coast</option>

            <option data-belongs-to="California" value="San Luis Obispo">San Luis Obispo</option>

            <option data-belongs-to="California" value="Santa Barbara County">Santa Barbara County</option>

            <option data-belongs-to="California" value="Sierra Foothills">Sierra Foothills</option>

            <option data-belongs-to="California" value="Sonoma County">Sonoma County</option>

            <option data-belongs-to="California" value="South Coast">South Coast</option>

            <option data-belongs-to="California" value="Other">Other</option>

            <option selected="selected" data-belongs-to="Washington" value=""></option>

            <option data-belongs-to="Washington" value="Columbia Valley">Columbia Valley</option>

            <option data-belongs-to="Washington" value="Yakima Valley">Yakima Valley</option>

            <option data-belongs-to="Washington" value="Walla Walla Valley">Walla Walla Valley</option>

            <option data-belongs-to="Washington" value="Other">Other</option>

            <option selected="selected" data-belongs-to="Oregon" value=""></option>

            <option data-belongs-to="Oregon" value="Willamette Valley">Willamette Valley</option>

            <option data-belongs-to="Oregon" value="NWV Dundee Hills">NWV Dundee Hills</option>

            <option data-belongs-to="Oregon" value="Other">Other</option>

        </select>
    </div>
</div>


<!-- VINTAGE -->
<div class="form-group mzhidden" data-belongs-to="wine">
    <label for="vintage" class="control-label col-sm-2 text-right">Vintage</label>

    <div class="col-sm-10">
        <select class="form-control form-select" id="vintage">

            <option value="" selected="selected"></option>

            <option value="2013">2013</option>

            <option value="2012">2012</option>

            <option value="2011">2011</option>

            <option value="2010">2010</option>

            <option value="2009">2009</option>

            <option value="2008">2008</option>

            <option value="2007">2007</option>

            <option value="2006">2006</option>

            <option value="2005">2005</option>

            <option value="2004">2004</option>

            <option value="2003">2003</option>

            <option value="2002">2002</option>

            <option value="2001">2001</option>

            <option value="2000">2000</option>

            <option value="1999">1999</option>

            <option value="1998">1998</option>

            <option value="1997">1997</option>

            <option value="1996">1996</option>

            <option value="1995">1995</option>

            <option value="1994">1994</option>

            <option value="1993">1993</option>

            <option value="1992">1992</option>

            <option value="1991">1991</option>

            <option value="1990">1990</option>

            <option value="1989">1989</option>

            <option value="1988">1988</option>

            <option value="1987">1987</option>

            <option value="1986">1986</option>

            <option value="1985">1985</option>

            <option value="1984">1984</option>

            <option value="1983">1983</option>

            <option value="1982">1982</option>

            <option value="1981">1981</option>

            <option value="1980">1980</option>

            <option value="1979">1979</option>

            <option value="1978">1978</option>

            <option value="1977">1977</option>

            <option value="1976">1976</option>

            <option value="1975">1975</option>

            <option value="1974">1974</option>

            <option value="1973">1973</option>

            <option value="1972">1972</option>

            <option value="1971">1971</option>

            <option value="1970">1970</option>

            <option value="1969">1969</option>

            <option value="1968">1968</option>

            <option value="1967">1967</option>

            <option value="1966">1966</option>

            <option value="1965">1965</option>

            <option value="1964">1964</option>

            <option value="1963">1963</option>

            <option value="1962">1962</option>

            <option value="1961">1961</option>

            <option value="1960">1960</option>

        </select>
    </div>
</div>

<!-- ABV % -->
<div class="form-group mzhidden" data-belongs-to="wine-spirits-beer">
    <label for="abv" class="control-label col-sm-2 text-right">ABV %</label>

    <div class="col-sm-10">
        <input type="text" class="form-control" id="abv" value="0.00" maxlength="6"
               data-inputmask="'alias': 'numeric', 'rightAlign': false, 'autoGroup': true, 'radixPoint': '.', 'placeholder': '0', 'clearMaskOnLostFocus': false, 'digits': 2, 'digitsOptional': false"
               data-mask>
    </div>
</div>
</div>
<div class="tab-pane" id="pricing">
    <div class="item-category-warning">


        <div class="alert alert-warning">
            <i class="fa fa-warning"></i>
            <span id="flashMessage">Please choose an Item Category in the "Item" tab.</span>
        </div>
    </div>

    <!-- UNIT COST -->
    <div class="form-group" data-belongs-to="all-types">
        <label for="unit_cost" class="control-label col-sm-2 text-right">Unit Cost <span
                class="text-danger">*</span></label>

        <div class="col-sm-10">
            <input type="text" class="form-control text-left" id="unit_cost2" value="0.00" maxlength="9"
                   data-inputmask="'alias': 'numeric', 'rightAlign': false, 'autoGroup': true, 'radixPoint': '.', 'placeholder': '0', 'clearMaskOnLostFocus': false, 'digits': 2, 'digitsOptional': false"
                   data-mask>
        </div>

    </div>

    <!-- UNIT PRICE -->
    <div class="form-group" data-belongs-to="all-types">
        <label for="unit_price" class="control-label col-sm-2 text-right">Unit Price</label>

        <div class="col-sm-10">
            <input type="text" class="form-control text-left" id="unit_price" value="0.00" maxlength="9"
                   data-inputmask="'alias': 'numeric', 'rightAlign': false, 'autoGroup': true, 'radixPoint': '.', 'placeholder': '0', 'clearMaskOnLostFocus': false, 'digits': 2, 'digitsOptional': false"
                   data-mask>
        </div>
    </div>

    <!-- UNIT PROFIT -->
    <div class="form-group" data-belongs-to="all-types">
        <label for="unit_profit" class="control-label col-sm-2 text-right">Unit Cost %</label>

        <div class="col-sm-10">
            <input type="text" class="form-control text-left" id="unit_profit" maxlength="6"
                   data-inputmask="'alias': 'numeric', 'rightAlign': false, 'autoGroup': true, 'radixPoint': '.', 'placeholder': '0', 'clearMaskOnLostFocus': false, 'digits': 2, 'digitsOptional': false"
                   data-mask>
        </div>
    </div>

    <hr>
    <!-- CASE COST -->
    <div class="form-group" data-belongs-to="all-types">
        <label for="case_cost" class="control-label col-sm-2 text-right">Case Cost</label>

        <div class="col-sm-10">
            <input type="text" class="form-control text-left" id="case_cost" value="0.00" maxlength="9"
                   data-inputmask="'alias': 'numeric', 'rightAlign': false, 'autoGroup': true, 'radixPoint': '.', 'placeholder': '0', 'clearMaskOnLostFocus': false, 'digits': 2, 'digitsOptional': false"
                   data-mask>
        </div>
    </div>

    <!-- CASE SIZE -->
    <div class="form-group" data-belongs-to="all-types">
        <label for="case_size" class="control-label col-sm-2 text-right">Case Size</label>

        <div class="col-sm-10">
            <input type="text" class="form-control text-left" id="case_size" name="case_size" value="1" maxlength="4"
                   data-inputmask="'alias': 'integer', 'groupSeparator': '', 'placeholder': '', 'clearMaskOnLostFocus': false, 'rightAlign': false, 'autoGroup': true"
                   data-mask>
        </div>
    </div>

    <!-- POUR SIZE -->
    <div class="form-group" data-belongs-to="wine-beer-spirits-beverages">
        <hr>
        <label for="pour_size" class="control-label col-sm-2 text-right">Pour Size</label>

        <div class="col-sm-10">
            <select class="form-control form-select" id="pour_size">

                <option value="" selected="selected"></option>

                <option value="0.5oz">0.5oz</option>

                <option value="0.75oz">0.75oz</option>

                <option value="1oz">1oz</option>

                <option value="1.25oz">1.25oz</option>

                <option value="1.5oz">1.5oz</option>

                <option value="1.75oz">1.75oz</option>

                <option value="2oz">2oz</option>

                <option value="2.25oz">2.25oz</option>

                <option value="2.5oz">2.5oz</option>

                <option value="3oz">3oz</option>

                <option value="3.25oz">3.25oz</option>

                <option value="3.5oz">3.5oz</option>

                <option value="3.75oz">3.75oz</option>

                <option value="4oz">4oz</option>

                <option value="4.5oz">4.5oz</option>

                <option value="5oz">5oz</option>

                <option value="5.5oz">5.5oz</option>

                <option value="6oz">6oz</option>

                <option value="6.5oz">6.5oz</option>

                <option value="7oz">7oz</option>

                <option value="7.5oz">7.5oz</option>

                <option value="8oz">8oz</option>

                <option value="8.5oz">8.5oz</option>

                <option value="10oz">10oz</option>

                <option value="12oz">12oz</option>

                <option value="14oz">14oz</option>

                <option value="16oz">16oz</option>

                <option value="18oz">18oz</option>

            </select>
        </div>
    </div>

    <!-- POUR COST -->
    <div class="form-group" data-belongs-to="wine-beer-spirits-beverages">
        <label for="pour_cost" class="control-label col-sm-2 text-right">Pour Cost</label>

        <div class="col-sm-10">
            <input type="text" readonly class="form-control text-left" id="pour_cost" value="0.00"
                   data-inputmask="'alias': 'numeric', 'rightAlign': false, 'autoGroup': true, 'radixPoint': '.', 'placeholder': '0', 'clearMaskOnLostFocus': false, 'digits': 2, 'digitsOptional': false"
                   data-mask>
        </div>
    </div>

    <!-- POUR PRICE -->
    <div class="form-group" data-belongs-to="wine-beer-spirits-beverages">
        <label for="pour_price" class="control-label col-sm-2 text-right">Pour Price</label>

        <div class="col-sm-10">
            <input type="text" class="form-control text-left" id="pour_price" value="0.00" maxlength="9"
                   data-inputmask="'alias': 'numeric', 'rightAlign': false, 'autoGroup': true, 'radixPoint': '.', 'placeholder': '0', 'clearMaskOnLostFocus': false, 'digits': 2, 'digitsOptional': false"
                   data-mask>
        </div>
    </div>

    <!-- POUR PROFIT -->
    <div class="form-group" data-belongs-to="wine-beer-spirits-beverages">
        <label for="pour_profit" class="control-label col-sm-2 text-right">Pour Cost %</label>

        <div class="col-sm-10">
            <input type="text" class="form-control text-left" id="pour_profit" maxlength="6">
        </div>
    </div>

    <hr>

    <!-- CRV -->
    <div class="form-group" data-belongs-to="all-types">
        <label for="crv" class="control-label col-sm-2 text-right">CRV</label>

        <div class="col-sm-10">
            <input type="text" class="form-control text-left" id="crv" value="0.00" maxlength="6"
                   data-inputmask="'alias': 'numeric', 'rightAlign': false, 'autoGroup': true, 'radixPoint': '.', 'placeholder': '0', 'clearMaskOnLostFocus': false, 'digits': 2, 'digitsOptional': false"
                   data-mask>
        </div>
    </div>
    <div class="form-group" data-belongs-to="all-types">
        <label for="deposit" class="control-label col-sm-2 text-right">Deposit</label>

        <div class="col-sm-10">
            <input type="text" class="form-control text-left" id="deposit" value="0.00" maxlength="6"
                   data-inputmask="'alias': 'numeric', 'rightAlign': false, 'autoGroup': true, 'radixPoint': '.', 'placeholder': '0', 'clearMaskOnLostFocus': false, 'digits': 2, 'digitsOptional': false"
                   data-mask>
        </div>
    </div>

</div>
<div class="tab-pane" id="order">
    <div class="item-category-warning">


        <div class="alert alert-warning">
            <i class="fa fa-warning"></i>
            <span id="flashMessage">Please choose an Item Category in the "Item" tab.</span>
        </div>
    </div>

    <!-- PAR -->
    <div class="form-group" data-belongs-to="all-types">
        <label for="par" class="control-label col-sm-2 text-right">Par</label>

        <div class="col-sm-10">
            <input type="text" class="form-control text-left" id="par" maxlength="5" value="0"
                   data-inputmask="'alias': 'integer', 'groupSeparator': '', 'placeholder': '', 'clearMaskOnLostFocus': false, 'rightAlign': false, 'autoGroup': true"
                   data-mask>
        </div>
    </div>

    <!-- ORDER CASE QUANTITY -->
    <div class="form-group" data-belongs-to="all-types">
        <label for="order_case_qty" class="control-label col-sm-2 text-right">Order Case Qty</label>

        <div class="col-sm-10">
            <input type="text" class="form-control text-left" id="order_case_qty" maxlength="5" value="0"
                   data-inputmask="'alias': 'integer', 'groupSeparator': '', 'placeholder': '', 'clearMaskOnLostFocus': false, 'rightAlign': false, 'autoGroup': true"
                   data-mask>
        </div>
    </div>

    <!-- ORDER QUANTITY -->
    <div class="form-group" data-belongs-to="all-types">
        <label for="order_qty" class="control-label col-sm-2 text-right">Order Unit Qty</label>

        <div class="col-sm-10">
            <input type="text" class="form-control text-left" id="order_qty" maxlength="5" value="0"
                   data-inputmask="'alias': 'integer', 'groupSeparator': '', 'placeholder': '', 'clearMaskOnLostFocus': false, 'rightAlign': false, 'autoGroup': true"
                   data-mask>
        </div>
    </div>

    <!-- NOTES -->
    <div class="form-group" data-belongs-to="all-types">
        <label for="order_qty" class="control-label col-sm-2 text-right">Order Notes</label>

        <div class="col-sm-10">
            <input type="text" class="form-control text-left" id="notes" maxlength="64" value="">
        </div>
    </div>

</div>
</div>
</form>
</div>

</div>
<div class="box-footer text-right">
    <a href="#" id="addBtn" class="btn btn-primary"><span class="fa fa-plus"></span> &nbsp; Add New Item</a>
</div>
</div>


</div>