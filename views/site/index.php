<?php

/** @var yii\web\View $this */

$this->title = 'TRADING YII';
?>
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
    <div id="tradingview_2fc06"></div>
    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    <script type="text/javascript">
     new TradingView.widget(
	 {
	     "autosize": false,
	     "symbol": "NASDAQ:MSFT",
	     "interval": "D",
	     "timezone": "Etc/UTC",
	     "theme": "dark",
	     "style": "1",
	     "locale": "en",
	     "toolbar_bg": "#f1f3f6",
	     "enable_publishing": false,
	     "allow_symbol_change": true,
             "container_id": "tradingview_2fc06",
	     "width": "1000px",
	     "height": "800px",
	 }
     );
    </script>
</div>
<!-- TradingView Widget END -->
