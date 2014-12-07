<div id="page-content-wrapper">



    <?php echo $this->element('newsite');?>

    <script src="https://d3jruo7yef7z6a.cloudfront.net/assets/javascripts/e1eda1fa455246d80e1c1c57188b7e3f-trial_modal.min.js"></script>


   <?php echo $this->element('alerts');?>



    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Cocktail Pricing</h3>
        </div>
        <div class="box-body table-responsive">
            <table class="table table-condensed sortable" border="0">
                <tr>
                    <th class="text-center">#</th>
                    <th>Cocktail</th>
                    <th class="text-center">Ingredients</th>
                    <th class="text-right">Drink Cost</th>
                    <th class="text-right">Drink Price</th>
                    <th class="text-right">Cost %</th>
                    <th class="text-right">Track?</th>
                    <th class="text-right">Reprice?</th>
                </tr>

                <tr>
                    <td class="text-center">1</td>
                    <td><a href="/cocktail/show/260">Rum Cocktail</a></td>
                    <td class="text-center">3</td>
                    <td class="text-right">1.57</td>
                    <td class="text-right">11.00</td>
                    <td class="text-right">14.27%</td>
                    <td class="text-right ">Yes</td>
                    <td class="text-right "></td>

                </tr>

                <tr>
                    <td class="text-center">2</td>
                    <td><a href="/cocktail/show/259">Whiskey Sour</a></td>
                    <td class="text-center">3</td>
                    <td class="text-right">2.50</td>
                    <td class="text-right">10.00</td>
                    <td class="text-right">25.00%</td>
                    <td class="text-right ">Yes</td>
                    <td class="text-right "></td>

                </tr>

            </table>
        </div>
    </div>

</div>