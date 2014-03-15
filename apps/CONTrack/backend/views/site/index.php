<?php

use kartik\widgets\SideNav;
use miloschuman\highcharts\Highcharts;

/**
 * @var yii\web\View $this
 */

$this->title = 'CONTrack'; //CHANGED MVW 02/26/14: Changed from My Yii Application. This shows in Browser tab.
?>
 <div class="site-index">

	<div class="jumbotron">
		<h2>CONTrack - Construction Tracking System</h2><!-- CHANGED MVW 03/08/14 -->

		<p class="lead">Admin Home Page</p><!-- CHANGED MVW 03/10/14 -->

		<p><a class="btn btn-lg btn-success" href="http://www.contrack.net">Get started with CONTrack</a></p><!--CHANGED VJT 03/10/14 -->

    <?php echo Highcharts::widget([
       'options'=>'{
          "title": { "text": "Inspections" },
          "xAxis": {
             "categories": ["January", "February", "March"]
          },
          "yAxis": {
             "title": { "text": "Number of Inspections" }
          },
          "series": [
             { "name": "Jane", "data": [1, 0, 4] },
             { "name": "John", "data": [5, 7,3] }
          ]
       }'
    ]);
    ?>


<?php /*?><?php
use bburim\flot\Chart as Chart;

echo Chart::widget([
    'data' => [
        [
            'label' => 'line', 
            'data'  => [
                [1, 1],
                [2,7],
                [3,12],
                [4,32],
                [5,62],
                [6,89],
            ],
            'lines'  => ['show' => true],
            'points' => ['show' => true],
        ],
        [
            'label' => 'bars', 
            'data'  => [
                [1,12],
                [2,16],
                [3,89],
                [4,44],
                [5,38],
            ],
            'bars' => ['show' => true],
        ],
    ],
    'options' => [
        'legend' => [
            'position'          => 'nw',
            'show'              => true,
            'margin'            => 10,
            'backgroundOpacity' => 0.5
        ],
    ],
    'htmlOptions' => [
        'style' => 'width:400px;height:400px;'
    ]
]);
?><?php */?>
<!--6dc80aea58851e49863afacfe118d79fa00a5d4f-->
	</div>

	<div class="body-content">

		<div class="row">
			<div class="col-lg-4">
        
				<h2>What is CONTrack?</h2>

				<p><!-- This file is located at: <strong>\backend\views\site\index.php</strong> --><!-- CHANGED MVW 03/08/14-->CONTrack is a construction tracking system that integrates the entire construction process from conception to close-out betwen Owner, Builder, Inspector, and Lender, each accessing the Project with their own secure login. Users can also utilize CONTrack independently of other parties to manage non-integrated Projects of their own.</p><!--CHANGED MVW 03/10/14 -->

        <p><a class="btn btn-primary" href="http://contrack.net/site/page?view=what-is-contrack">Read More &raquo;</a></p><!--CHANGED VJT 03/10/14 -->
				
			</div>
			<div class="col-lg-4">
				<h2>Why use CONTrack?</h2></p><!--CHANGED MVW 03/10/14 -->

        <p>Many typical pitfalls happen during the course of construction, such as multiple/inconsistent cost breakdowns, inconsistent inspections, and unauthorized changes in project specs. CONTrack addresses these issues and helps take the stress out of the process.</p></p><!--CHANGED VJT 03/10/14 -->

        <p><a class="btn btn-primary" href="http://contrack.net/site/page?view=why-contrack">Read More &raquo;</a></p><!--CHANGED VJT 03/10/14 -->
			</div>
			<div class="col-lg-4">
				<h2>How does it work?</h2><!--CHANGED MVW 03/10/14 -->

        <p>CONTrack is the Swiss Army Knife of Construction Management Systems. We have tried to conceptualize every tool that is needed in the construction process, and if we happened to miss something that you need... Great! We can add it. Click here for some of our features.</p><!--CHANGED VJT 03/10/14 -->
				

        <p><a class="btn btn-primary" href="http://contrack.net/site/page?view=features">Read More &raquo;</a></p><!--CHANGED VJT 03/10/14 -->
			</div>
		</div>

	</div>
</div>
