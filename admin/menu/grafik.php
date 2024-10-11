<div class="card card-primary card-outline">
  <div class="card-header">
    <h3 class="card-title">
      <i class="far fa-chart-bar"></i>
      Interactive Area Chart
    </h3>

    <div class="card-tools">
      Real time
      <div class="btn-group" id="realtime" data-toggle="btn-toggle">
        <button type="button" class="btn btn-default btn-sm active" data-toggle="on">On</button>
        <button type="button" class="btn btn-default btn-sm" data-toggle="off">Off</button>
      </div>
    </div>
  </div>
  <div class="card-body">
    <div id="interactive" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" width="787" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 787px; height: 300px;"></canvas><canvas class="flot-overlay" width="787" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 787px; height: 300px;"></canvas>
      <div class="flot-svg" style="position: absolute; top: 0px; left: 0px; height: 100%; width: 100%; pointer-events: none;"><svg style="width: 100%; height: 100%;">
          <g class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;"><text x="28" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">0</text><text x="99.47847123579545" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">10</text><text x="174.9330166903409" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">20</text><text x="250.38756214488637" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">30</text><text x="325.8421075994318" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">40</text><text x="401.2966530539773" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">50</text><text x="476.75119850852275" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">60</text><text x="552.2057439630682" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">70</text><text x="627.6602894176136" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">80</text><text x="703.1148348721591" y="294" class="flot-tick-label tickLabel" style="position: absolute; text-align: center;">90</text></g>
          <g class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;"><text x="8.9521484375" y="269" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">0</text><text x="1" y="218.2" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">20</text><text x="1" y="167.4" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">40</text><text x="1" y="116.6" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">60</text><text x="1" y="65.8" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">80</text><text x="-6.9521484375" y="15" class="flot-tick-label tickLabel" style="position: absolute; text-align: right;">100</text></g>
        </svg></div>
    </div>
  </div>
  <!-- /.card-body-->
</div>