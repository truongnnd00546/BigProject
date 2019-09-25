@extends('layout.master',['page_title'=>'Example chart | Admin page'])
@section('content')
    <div class="header text-center">
        <h3 class="title">Chartist.js</h3>
        <p class="category">Handcrafted by our friends from
            <a target="_blank" href="https://gionkunz.github.io/chartist-js/">Chartist.js</a>. Please checkout their
            <a href="https://gionkunz.github.io/chartist-js/getting-started.html" target="_blank">full
                documentation.</a>
        </p>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card card-chart">
                <div class="card-header" data-background-color="rose">
                    <div id="roundedLineChart" class="ct-chart">
                        <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%"
                             class="ct-chart-line" style="width: 100%; height: 100%;">
                            <g class="ct-grids">
                                <line y1="120" y2="120" x1="40" x2="730" class="ct-grid ct-vertical"></line>
                                <line y1="96" y2="96" x1="40" x2="730" class="ct-grid ct-vertical"></line>
                                <line y1="72" y2="72" x1="40" x2="730" class="ct-grid ct-vertical"></line>
                                <line y1="48" y2="48" x1="40" x2="730" class="ct-grid ct-vertical"></line>
                                <line y1="24" y2="24" x1="40" x2="730" class="ct-grid ct-vertical"></line>
                                <line y1="0" y2="0" x1="40" x2="730" class="ct-grid ct-vertical"></line>
                            </g>
                            <g>
                                <g class="ct-series ct-series-a">
                                    <path d="M 40 91.2 C 56.429 89.2 105.714 77.2 138.571 79.2 C 171.429 81.2 204.286 103.2 237.143 103.2 C 270 103.2 302.857 85.6 335.714 79.2 C 368.571 72.8 401.429 65.2 434.286 64.8 C 467.143 64.4 500 82.8 532.857 76.8 C 565.714 70.8 615 36.8 631.429 28.8"
                                          class="ct-line"></path>
                                </g>
                            </g>
                            <g class="ct-labels">
                                <foreignObject style="overflow: visible;" x="40" y="125" width="98.57142857142857"
                                               height="20"><span class="ct-label ct-horizontal ct-end"
                                                                 style="width: 99px; height: 20px"
                                                                 xmlns="http://www.w3.org/1999/xhtml">M</span>
                                </foreignObject>
                                <foreignObject style="overflow: visible;" x="138.57142857142856" y="125"
                                               width="98.57142857142857" height="20"><span
                                            class="ct-label ct-horizontal ct-end" style="width: 99px; height: 20px"
                                            xmlns="http://www.w3.org/1999/xhtml">T</span></foreignObject>
                                <foreignObject style="overflow: visible;" x="237.14285714285714" y="125"
                                               width="98.57142857142858" height="20"><span
                                            class="ct-label ct-horizontal ct-end" style="width: 99px; height: 20px"
                                            xmlns="http://www.w3.org/1999/xhtml">W</span></foreignObject>
                                <foreignObject style="overflow: visible;" x="335.7142857142857" y="125"
                                               width="98.57142857142856" height="20"><span
                                            class="ct-label ct-horizontal ct-end" style="width: 99px; height: 20px"
                                            xmlns="http://www.w3.org/1999/xhtml">T</span></foreignObject>
                                <foreignObject style="overflow: visible;" x="434.2857142857143" y="125"
                                               width="98.57142857142856" height="20"><span
                                            class="ct-label ct-horizontal ct-end" style="width: 99px; height: 20px"
                                            xmlns="http://www.w3.org/1999/xhtml">F</span></foreignObject>
                                <foreignObject style="overflow: visible;" x="532.8571428571429" y="125"
                                               width="98.57142857142861" height="20"><span
                                            class="ct-label ct-horizontal ct-end" style="width: 99px; height: 20px"
                                            xmlns="http://www.w3.org/1999/xhtml">S</span></foreignObject>
                                <foreignObject style="overflow: visible;" x="631.4285714285714" y="125"
                                               width="98.57142857142856" height="20"><span
                                            class="ct-label ct-horizontal ct-end" style="width: 99px; height: 20px"
                                            xmlns="http://www.w3.org/1999/xhtml">S</span></foreignObject>
                                <foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span
                                            class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px"
                                            xmlns="http://www.w3.org/1999/xhtml">0</span></foreignObject>
                                <foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span
                                            class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px"
                                            xmlns="http://www.w3.org/1999/xhtml">10</span></foreignObject>
                                <foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span
                                            class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px"
                                            xmlns="http://www.w3.org/1999/xhtml">20</span></foreignObject>
                                <foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span
                                            class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px"
                                            xmlns="http://www.w3.org/1999/xhtml">30</span></foreignObject>
                                <foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span
                                            class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px"
                                            xmlns="http://www.w3.org/1999/xhtml">40</span></foreignObject>
                                <foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span
                                            class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px"
                                            xmlns="http://www.w3.org/1999/xhtml">50</span></foreignObject>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Rounded Line Chart</h4>
                    <p class="category">Line Chart</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-chart">
                <div class="card-header" data-background-color="orange">
                    <div id="straightLinesChart" class="ct-chart">
                        <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%"
                             class="ct-chart-line" style="width: 100%; height: 100%;">
                            <g class="ct-grids">
                                <line x1="40" x2="40" y1="0" y2="120" class="ct-grid ct-horizontal"></line>
                                <line x1="116.66666666666667" x2="116.66666666666667" y1="0" y2="120"
                                      class="ct-grid ct-horizontal"></line>
                                <line x1="193.33333333333334" x2="193.33333333333334" y1="0" y2="120"
                                      class="ct-grid ct-horizontal"></line>
                                <line x1="270" x2="270" y1="0" y2="120" class="ct-grid ct-horizontal"></line>
                                <line x1="346.6666666666667" x2="346.6666666666667" y1="0" y2="120"
                                      class="ct-grid ct-horizontal"></line>
                                <line x1="423.33333333333337" x2="423.33333333333337" y1="0" y2="120"
                                      class="ct-grid ct-horizontal"></line>
                                <line x1="500" x2="500" y1="0" y2="120" class="ct-grid ct-horizontal"></line>
                                <line x1="576.6666666666667" x2="576.6666666666667" y1="0" y2="120"
                                      class="ct-grid ct-horizontal"></line>
                                <line x1="653.3333333333334" x2="653.3333333333334" y1="0" y2="120"
                                      class="ct-grid ct-horizontal"></line>
                                <line y1="120" y2="120" x1="40" x2="730" class="ct-grid ct-vertical"></line>
                                <line y1="96" y2="96" x1="40" x2="730" class="ct-grid ct-vertical"></line>
                                <line y1="72" y2="72" x1="40" x2="730" class="ct-grid ct-vertical"></line>
                                <line y1="48" y2="48" x1="40" x2="730" class="ct-grid ct-vertical"></line>
                                <line y1="24" y2="24" x1="40" x2="730" class="ct-grid ct-vertical"></line>
                                <line y1="0" y2="0" x1="40" x2="730" class="ct-grid ct-vertical"></line>
                            </g>
                            <g>
                                <g class="ct-series ct-series-a">
                                    <path d="M 40 96 C 116.667 81.6 116.667 81.6 116.667 81.6 C 193.333 100.8 193.333 100.8 193.333 100.8 C 270 88.8 270 88.8 270 88.8 C 346.667 72 346.667 72 346.667 72 C 423.333 84 423.333 84 423.333 84 C 500 72 500 72 500 72 C 576.667 38.4 576.667 38.4 576.667 38.4 C 653.333 48 653.333 48 653.333 48"
                                          class="ct-line ct-white"></path>
                                    <line x1="40" y1="96" x2="40.01" y2="96" class="ct-point ct-white" ct:value="10"
                                          opacity="1"></line>
                                    <line x1="116.66666666666667" y1="81.6" x2="116.67666666666668" y2="81.6"
                                          class="ct-point ct-white" ct:value="16" opacity="1"></line>
                                    <line x1="193.33333333333334" y1="100.8" x2="193.34333333333333" y2="100.8"
                                          class="ct-point ct-white" ct:value="8" opacity="1"></line>
                                    <line x1="270" y1="88.8" x2="270.01" y2="88.8" class="ct-point ct-white"
                                          ct:value="13" opacity="1"></line>
                                    <line x1="346.6666666666667" y1="72" x2="346.6766666666667" y2="72"
                                          class="ct-point ct-white" ct:value="20" opacity="1"></line>
                                    <line x1="423.33333333333337" y1="84" x2="423.34333333333336" y2="84"
                                          class="ct-point ct-white" ct:value="15" opacity="1"></line>
                                    <line x1="500" y1="72" x2="500.01" y2="72" class="ct-point ct-white" ct:value="20"
                                          opacity="1"></line>
                                    <line x1="576.6666666666667" y1="38.400000000000006" x2="576.6766666666667"
                                          y2="38.400000000000006" class="ct-point ct-white" ct:value="34"
                                          opacity="1"></line>
                                    <line x1="653.3333333333334" y1="48" x2="653.3433333333334" y2="48"
                                          class="ct-point ct-white" ct:value="30" opacity="1"></line>
                                </g>
                            </g>
                            <g class="ct-labels">
                                <foreignObject style="overflow: visible;" x="40" y="125" width="76.66666666666667"
                                               height="20"><span class="ct-label ct-horizontal ct-end"
                                                                 style="width: 77px; height: 20px"
                                                                 xmlns="http://www.w3.org/1999/xhtml">'07</span>
                                </foreignObject>
                                <foreignObject style="overflow: visible;" x="116.66666666666667" y="125"
                                               width="76.66666666666667" height="20"><span
                                            class="ct-label ct-horizontal ct-end" style="width: 77px; height: 20px"
                                            xmlns="http://www.w3.org/1999/xhtml">'08</span></foreignObject>
                                <foreignObject style="overflow: visible;" x="193.33333333333334" y="125"
                                               width="76.66666666666666" height="20"><span
                                            class="ct-label ct-horizontal ct-end" style="width: 77px; height: 20px"
                                            xmlns="http://www.w3.org/1999/xhtml">'09</span></foreignObject>
                                <foreignObject style="overflow: visible;" x="270" y="125" width="76.66666666666669"
                                               height="20"><span class="ct-label ct-horizontal ct-end"
                                                                 style="width: 77px; height: 20px"
                                                                 xmlns="http://www.w3.org/1999/xhtml">'10</span>
                                </foreignObject>
                                <foreignObject style="overflow: visible;" x="346.6666666666667" y="125"
                                               width="76.66666666666669" height="20"><span
                                            class="ct-label ct-horizontal ct-end" style="width: 77px; height: 20px"
                                            xmlns="http://www.w3.org/1999/xhtml">'11</span></foreignObject>
                                <foreignObject style="overflow: visible;" x="423.33333333333337" y="125"
                                               width="76.66666666666663" height="20"><span
                                            class="ct-label ct-horizontal ct-end" style="width: 77px; height: 20px"
                                            xmlns="http://www.w3.org/1999/xhtml">'12</span></foreignObject>
                                <foreignObject style="overflow: visible;" x="500" y="125" width="76.66666666666674"
                                               height="20"><span class="ct-label ct-horizontal ct-end"
                                                                 style="width: 77px; height: 20px"
                                                                 xmlns="http://www.w3.org/1999/xhtml">'13</span>
                                </foreignObject>
                                <foreignObject style="overflow: visible;" x="576.6666666666667" y="125"
                                               width="76.66666666666663" height="20"><span
                                            class="ct-label ct-horizontal ct-end" style="width: 77px; height: 20px"
                                            xmlns="http://www.w3.org/1999/xhtml">'14</span></foreignObject>
                                <foreignObject style="overflow: visible;" x="653.3333333333334" y="125"
                                               width="76.66666666666663" height="20"><span
                                            class="ct-label ct-horizontal ct-end" style="width: 77px; height: 20px"
                                            xmlns="http://www.w3.org/1999/xhtml">'15</span></foreignObject>
                                <foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span
                                            class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px"
                                            xmlns="http://www.w3.org/1999/xhtml">0</span></foreignObject>
                                <foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span
                                            class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px"
                                            xmlns="http://www.w3.org/1999/xhtml">10</span></foreignObject>
                                <foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span
                                            class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px"
                                            xmlns="http://www.w3.org/1999/xhtml">20</span></foreignObject>
                                <foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span
                                            class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px"
                                            xmlns="http://www.w3.org/1999/xhtml">30</span></foreignObject>
                                <foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span
                                            class="ct-label ct-vertical ct-start" style="height: 24px; width: 30px"
                                            xmlns="http://www.w3.org/1999/xhtml">40</span></foreignObject>
                                <foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span
                                            class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px"
                                            xmlns="http://www.w3.org/1999/xhtml">50</span></foreignObject>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Straight Lines Chart</h4>
                    <p class="category">Line Chart with Points</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-chart">
                <div class="card-header" data-background-color="blue">
                    <div id="simpleBarChart" class="ct-chart">
                        <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%"
                             class="ct-chart-bar" style="width: 100%; height: 100%;">
                            <g class="ct-grids">
                                <line y1="115" y2="115" x1="50" x2="715" class="ct-grid ct-vertical"></line>
                                <line y1="92.77777777777777" y2="92.77777777777777" x1="50" x2="715"
                                      class="ct-grid ct-vertical"></line>
                                <line y1="70.55555555555556" y2="70.55555555555556" x1="50" x2="715"
                                      class="ct-grid ct-vertical"></line>
                                <line y1="48.33333333333333" y2="48.33333333333333" x1="50" x2="715"
                                      class="ct-grid ct-vertical"></line>
                                <line y1="26.111111111111114" y2="26.111111111111114" x1="50" x2="715"
                                      class="ct-grid ct-vertical"></line>
                            </g>
                            <g>
                                <g class="ct-series ct-series-a">
                                    <line x1="77.70833333333333" x2="77.70833333333333" y1="115" y2="54.77777777777778"
                                          class="ct-bar" ct:value="542" opacity="1"></line>
                                    <line x1="133.125" x2="133.125" y1="115" y2="65.77777777777777" class="ct-bar"
                                          ct:value="443" opacity="1"></line>
                                    <line x1="188.54166666666666" x2="188.54166666666666" y1="115"
                                          y2="79.44444444444444" class="ct-bar" ct:value="320" opacity="1"></line>
                                    <line x1="243.95833333333334" x2="243.95833333333334" y1="115"
                                          y2="28.33333333333333" class="ct-bar" ct:value="780" opacity="1"></line>
                                    <line x1="299.37499999999994" x2="299.37499999999994" y1="115"
                                          y2="53.55555555555556" class="ct-bar" ct:value="553" opacity="1"></line>
                                    <line x1="354.79166666666663" x2="354.79166666666663" y1="115"
                                          y2="64.66666666666666" class="ct-bar" ct:value="453" opacity="1"></line>
                                    <line x1="410.2083333333333" x2="410.2083333333333" y1="115" y2="78.77777777777777"
                                          class="ct-bar" ct:value="326" opacity="1"></line>
                                    <line x1="465.62499999999994" x2="465.62499999999994" y1="115"
                                          y2="66.77777777777777" class="ct-bar" ct:value="434" opacity="1"></line>
                                    <line x1="521.0416666666666" x2="521.0416666666666" y1="115" y2="51.888888888888886"
                                          class="ct-bar" ct:value="568" opacity="1"></line>
                                    <line x1="576.4583333333334" x2="576.4583333333334" y1="115" y2="47.22222222222223"
                                          class="ct-bar" ct:value="610" opacity="1"></line>
                                    <line x1="631.875" x2="631.875" y1="115" y2="31" class="ct-bar" ct:value="756"
                                          opacity="1"></line>
                                    <line x1="687.2916666666666" x2="687.2916666666666" y1="115" y2="15.555555555555557"
                                          class="ct-bar" ct:value="895" opacity="1"></line>
                                </g>
                            </g>
                            <g class="ct-labels">
                                <foreignObject style="overflow: visible;" x="50" y="120" width="55.416666666666664"
                                               height="20"><span class="ct-label ct-horizontal ct-end"
                                                                 style="width: 55px; height: 20px"
                                                                 xmlns="http://www.w3.org/1999/xhtml">Jan</span>
                                </foreignObject>
                                <foreignObject style="overflow: visible;" x="105.41666666666666" y="120"
                                               width="55.416666666666664" height="20"><span
                                            class="ct-label ct-horizontal ct-end" style="width: 55px; height: 20px"
                                            xmlns="http://www.w3.org/1999/xhtml">Feb</span></foreignObject>
                                <foreignObject style="overflow: visible;" x="160.83333333333331" y="120"
                                               width="55.41666666666667" height="20"><span
                                            class="ct-label ct-horizontal ct-end" style="width: 55px; height: 20px"
                                            xmlns="http://www.w3.org/1999/xhtml">Mar</span></foreignObject>
                                <foreignObject style="overflow: visible;" x="216.25" y="120" width="55.41666666666666"
                                               height="20"><span class="ct-label ct-horizontal ct-end"
                                                                 style="width: 55px; height: 20px"
                                                                 xmlns="http://www.w3.org/1999/xhtml">Apr</span>
                                </foreignObject>
                                <foreignObject style="overflow: visible;" x="271.66666666666663" y="120"
                                               width="55.41666666666666" height="20"><span
                                            class="ct-label ct-horizontal ct-end" style="width: 55px; height: 20px"
                                            xmlns="http://www.w3.org/1999/xhtml">Mai</span></foreignObject>
                                <foreignObject style="overflow: visible;" x="327.0833333333333" y="120"
                                               width="55.416666666666686" height="20"><span
                                            class="ct-label ct-horizontal ct-end" style="width: 55px; height: 20px"
                                            xmlns="http://www.w3.org/1999/xhtml">Jun</span></foreignObject>
                                <foreignObject style="overflow: visible;" x="382.5" y="120" width="55.41666666666663"
                                               height="20"><span class="ct-label ct-horizontal ct-end"
                                                                 style="width: 55px; height: 20px"
                                                                 xmlns="http://www.w3.org/1999/xhtml">Jul</span>
                                </foreignObject>
                                <foreignObject style="overflow: visible;" x="437.91666666666663" y="120"
                                               width="55.416666666666686" height="20"><span
                                            class="ct-label ct-horizontal ct-end" style="width: 55px; height: 20px"
                                            xmlns="http://www.w3.org/1999/xhtml">Aug</span></foreignObject>
                                <foreignObject style="overflow: visible;" x="493.3333333333333" y="120"
                                               width="55.416666666666686" height="20"><span
                                            class="ct-label ct-horizontal ct-end" style="width: 55px; height: 20px"
                                            xmlns="http://www.w3.org/1999/xhtml">Sep</span></foreignObject>
                                <foreignObject style="overflow: visible;" x="548.75" y="120" width="55.41666666666663"
                                               height="20"><span class="ct-label ct-horizontal ct-end"
                                                                 style="width: 55px; height: 20px"
                                                                 xmlns="http://www.w3.org/1999/xhtml">Oct</span>
                                </foreignObject>
                                <foreignObject style="overflow: visible;" x="604.1666666666666" y="120"
                                               width="55.41666666666663" height="20"><span
                                            class="ct-label ct-horizontal ct-end" style="width: 55px; height: 20px"
                                            xmlns="http://www.w3.org/1999/xhtml">Nov</span></foreignObject>
                                <foreignObject style="overflow: visible;" x="659.5833333333333" y="120"
                                               width="55.41666666666674" height="20"><span
                                            class="ct-label ct-horizontal ct-end" style="width: 55px; height: 20px"
                                            xmlns="http://www.w3.org/1999/xhtml">Dec</span></foreignObject>
                                <foreignObject style="overflow: visible;" y="92.77777777777777" x="10"
                                               height="22.22222222222222" width="30"><span
                                            class="ct-label ct-vertical ct-start" style="height: 22px; width: 30px"
                                            xmlns="http://www.w3.org/1999/xhtml">0</span></foreignObject>
                                <foreignObject style="overflow: visible;" y="70.55555555555554" x="10"
                                               height="22.22222222222222" width="30"><span
                                            class="ct-label ct-vertical ct-start" style="height: 22px; width: 30px"
                                            xmlns="http://www.w3.org/1999/xhtml">200</span></foreignObject>
                                <foreignObject style="overflow: visible;" y="48.33333333333333" x="10"
                                               height="22.22222222222223" width="30"><span
                                            class="ct-label ct-vertical ct-start" style="height: 22px; width: 30px"
                                            xmlns="http://www.w3.org/1999/xhtml">400</span></foreignObject>
                                <foreignObject style="overflow: visible;" y="26.111111111111114" x="10"
                                               height="22.222222222222214" width="30"><span
                                            class="ct-label ct-vertical ct-start" style="height: 22px; width: 30px"
                                            xmlns="http://www.w3.org/1999/xhtml">600</span></foreignObject>
                                <foreignObject style="overflow: visible;" y="-3.8888888888888857" x="10" height="30"
                                               width="30"><span class="ct-label ct-vertical ct-start"
                                                                style="height: 30px; width: 30px"
                                                                xmlns="http://www.w3.org/1999/xhtml">800</span>
                                </foreignObject>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Simple Bar Chart</h4>
                    <p class="category">Bar Chart</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="blue">
                    <i class="material-icons">timeline</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Coloured Bars Chart
                        <small> - Rounded</small>
                    </h4>
                </div>
                <div id="colouredBarsChart" class="ct-chart">
                    <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="300px"
                         class="ct-chart-line" style="width: 100%; height: 300px;">
                        <g class="ct-grids">
                            <line y1="265" y2="265" x1="50" x2="546" class="ct-grid ct-vertical"></line>
                            <line y1="240" y2="240" x1="50" x2="546" class="ct-grid ct-vertical"></line>
                            <line y1="215" y2="215" x1="50" x2="546" class="ct-grid ct-vertical"></line>
                            <line y1="190" y2="190" x1="50" x2="546" class="ct-grid ct-vertical"></line>
                            <line y1="165" y2="165" x1="50" x2="546" class="ct-grid ct-vertical"></line>
                            <line y1="140" y2="140" x1="50" x2="546" class="ct-grid ct-vertical"></line>
                            <line y1="115" y2="115" x1="50" x2="546" class="ct-grid ct-vertical"></line>
                            <line y1="90" y2="90" x1="50" x2="546" class="ct-grid ct-vertical"></line>
                            <line y1="65" y2="65" x1="50" x2="546" class="ct-grid ct-vertical"></line>
                            <line y1="40" y2="40" x1="50" x2="546" class="ct-grid ct-vertical"></line>
                            <line y1="15" y2="15" x1="50" x2="546" class="ct-grid ct-vertical"></line>
                        </g>
                        <g>
                            <g class="ct-series ct-series-a">
                                <path d="M 50 193.25 C 58.267 189.167 83.067 177.208 99.6 168.75 C 116.133 160.292 132.667 149.542 149.2 142.5 C 165.733 135.458 182.267 130.5 198.8 126.5 C 215.333 122.5 231.867 124.5 248.4 118.5 C 264.933 112.5 281.467 95.042 298 90.5 C 314.533 85.958 331.067 93.5 347.6 91.25 C 364.133 89 380.667 80.875 397.2 77 C 413.733 73.125 430.267 71.917 446.8 68 C 463.333 64.083 479.867 60 496.4 53.5 C 512.933 47 537.733 33.083 546 29"
                                      class="ct-line"></path>
                                <line x1="50" y1="193.25" x2="50.01" y2="193.25" class="ct-point" ct:value="287"
                                      opacity="1"></line>
                                <line x1="99.6" y1="168.75" x2="99.61" y2="168.75" class="ct-point" ct:value="385"
                                      opacity="1"></line>
                                <line x1="149.2" y1="142.5" x2="149.20999999999998" y2="142.5" class="ct-point"
                                      ct:value="490" opacity="1"></line>
                                <line x1="198.8" y1="126.5" x2="198.81" y2="126.5" class="ct-point" ct:value="554"
                                      opacity="1"></line>
                                <line x1="248.4" y1="118.5" x2="248.41" y2="118.5" class="ct-point" ct:value="586"
                                      opacity="1"></line>
                                <line x1="298" y1="90.5" x2="298.01" y2="90.5" class="ct-point" ct:value="698"
                                      opacity="1"></line>
                                <line x1="347.6" y1="91.25" x2="347.61" y2="91.25" class="ct-point" ct:value="695"
                                      opacity="1"></line>
                                <line x1="397.2" y1="77" x2="397.21" y2="77" class="ct-point" ct:value="752"
                                      opacity="1"></line>
                                <line x1="446.8" y1="68" x2="446.81" y2="68" class="ct-point" ct:value="788"
                                      opacity="1"></line>
                                <line x1="496.40000000000003" y1="53.5" x2="496.41" y2="53.5" class="ct-point"
                                      ct:value="846" opacity="1"></line>
                                <line x1="546" y1="29" x2="546.01" y2="29" class="ct-point" ct:value="944"
                                      opacity="1"></line>
                            </g>
                            <g class="ct-series ct-series-b">
                                <path d="M 50 248.25 C 58.267 244.708 83.067 230.167 99.6 227 C 116.133 223.833 132.667 234.875 149.2 229.25 C 165.733 223.625 182.267 201.25 198.8 193.25 C 215.333 185.25 231.867 187.417 248.4 181.25 C 264.933 175.083 281.467 160.5 298 156.25 C 314.533 152 331.067 160.083 347.6 155.75 C 364.133 151.417 380.667 134.625 397.2 130.25 C 413.733 125.875 430.267 129.708 446.8 129.5 C 463.333 129.292 479.867 133.375 496.4 129 C 512.933 124.625 537.733 107.542 546 103.25"
                                      class="ct-line"></path>
                                <line x1="50" y1="248.25" x2="50.01" y2="248.25" class="ct-point" ct:value="67"
                                      opacity="1"></line>
                                <line x1="99.6" y1="227" x2="99.61" y2="227" class="ct-point" ct:value="152"
                                      opacity="1"></line>
                                <line x1="149.2" y1="229.25" x2="149.20999999999998" y2="229.25" class="ct-point"
                                      ct:value="143" opacity="1"></line>
                                <line x1="198.8" y1="193.25" x2="198.81" y2="193.25" class="ct-point" ct:value="287"
                                      opacity="1"></line>
                                <line x1="248.4" y1="181.25" x2="248.41" y2="181.25" class="ct-point" ct:value="335"
                                      opacity="1"></line>
                                <line x1="298" y1="156.25" x2="298.01" y2="156.25" class="ct-point" ct:value="435"
                                      opacity="1"></line>
                                <line x1="347.6" y1="155.75" x2="347.61" y2="155.75" class="ct-point" ct:value="437"
                                      opacity="1"></line>
                                <line x1="397.2" y1="130.25" x2="397.21" y2="130.25" class="ct-point" ct:value="539"
                                      opacity="1"></line>
                                <line x1="446.8" y1="129.5" x2="446.81" y2="129.5" class="ct-point" ct:value="542"
                                      opacity="1"></line>
                                <line x1="496.40000000000003" y1="129" x2="496.41" y2="129" class="ct-point"
                                      ct:value="544" opacity="1"></line>
                                <line x1="546" y1="103.25" x2="546.01" y2="103.25" class="ct-point" ct:value="647"
                                      opacity="1"></line>
                            </g>
                            <g class="ct-series ct-series-c">
                                <path d="M 50 259.25 C 58.267 255.5 83.067 238.583 99.6 236.75 C 116.133 234.917 132.667 251.458 149.2 248.25 C 165.733 245.042 182.267 224.667 198.8 217.5 C 215.333 210.333 231.867 210.125 248.4 205.25 C 264.933 200.375 281.467 191.125 298 188.25 C 314.533 185.375 331.067 193.5 347.6 188 C 364.133 182.5 380.667 159.5 397.2 155.25 C 413.733 151 430.267 161.292 446.8 162.5 C 463.333 163.708 479.867 166.625 496.4 162.5 C 512.933 158.375 537.733 141.875 546 137.75"
                                      class="ct-line"></path>
                                <line x1="50" y1="259.25" x2="50.01" y2="259.25" class="ct-point" ct:value="23"
                                      opacity="1"></line>
                                <line x1="99.6" y1="236.75" x2="99.61" y2="236.75" class="ct-point" ct:value="113"
                                      opacity="1"></line>
                                <line x1="149.2" y1="248.25" x2="149.20999999999998" y2="248.25" class="ct-point"
                                      ct:value="67" opacity="1"></line>
                                <line x1="198.8" y1="217.5" x2="198.81" y2="217.5" class="ct-point" ct:value="190"
                                      opacity="1"></line>
                                <line x1="248.4" y1="205.25" x2="248.41" y2="205.25" class="ct-point" ct:value="239"
                                      opacity="1"></line>
                                <line x1="298" y1="188.25" x2="298.01" y2="188.25" class="ct-point" ct:value="307"
                                      opacity="1"></line>
                                <line x1="347.6" y1="188" x2="347.61" y2="188" class="ct-point" ct:value="308"
                                      opacity="1"></line>
                                <line x1="397.2" y1="155.25" x2="397.21" y2="155.25" class="ct-point" ct:value="439"
                                      opacity="1"></line>
                                <line x1="446.8" y1="162.5" x2="446.81" y2="162.5" class="ct-point" ct:value="410"
                                      opacity="1"></line>
                                <line x1="496.40000000000003" y1="162.5" x2="496.41" y2="162.5" class="ct-point"
                                      ct:value="410" opacity="1"></line>
                                <line x1="546" y1="137.75" x2="546.01" y2="137.75" class="ct-point" ct:value="509"
                                      opacity="1"></line>
                            </g>
                        </g>
                        <g class="ct-labels">
                            <foreignObject style="overflow: visible;" x="50" y="270" width="49.6" height="20"><span
                                        class="ct-label ct-horizontal ct-end" style="width: 50px; height: 20px"
                                        xmlns="http://www.w3.org/1999/xhtml">'06</span></foreignObject>
                            <foreignObject style="overflow: visible;" x="99.6" y="270" width="49.6" height="20"><span
                                        class="ct-label ct-horizontal ct-end" style="width: 50px; height: 20px"
                                        xmlns="http://www.w3.org/1999/xhtml">'07</span></foreignObject>
                            <foreignObject style="overflow: visible;" x="149.2" y="270" width="49.60000000000001"
                                           height="20"><span class="ct-label ct-horizontal ct-end"
                                                             style="width: 50px; height: 20px"
                                                             xmlns="http://www.w3.org/1999/xhtml">'08</span>
                            </foreignObject>
                            <foreignObject style="overflow: visible;" x="198.8" y="270" width="49.599999999999994"
                                           height="20"><span class="ct-label ct-horizontal ct-end"
                                                             style="width: 50px; height: 20px"
                                                             xmlns="http://www.w3.org/1999/xhtml">'09</span>
                            </foreignObject>
                            <foreignObject style="overflow: visible;" x="248.4" y="270" width="49.599999999999994"
                                           height="20"><span class="ct-label ct-horizontal ct-end"
                                                             style="width: 50px; height: 20px"
                                                             xmlns="http://www.w3.org/1999/xhtml">'10</span>
                            </foreignObject>
                            <foreignObject style="overflow: visible;" x="298" y="270" width="49.60000000000002"
                                           height="20"><span class="ct-label ct-horizontal ct-end"
                                                             style="width: 50px; height: 20px"
                                                             xmlns="http://www.w3.org/1999/xhtml">'11</span>
                            </foreignObject>
                            <foreignObject style="overflow: visible;" x="347.6" y="270" width="49.599999999999966"
                                           height="20"><span class="ct-label ct-horizontal ct-end"
                                                             style="width: 50px; height: 20px"
                                                             xmlns="http://www.w3.org/1999/xhtml">'12</span>
                            </foreignObject>
                            <foreignObject style="overflow: visible;" x="397.2" y="270" width="49.60000000000002"
                                           height="20"><span class="ct-label ct-horizontal ct-end"
                                                             style="width: 50px; height: 20px"
                                                             xmlns="http://www.w3.org/1999/xhtml">'13</span>
                            </foreignObject>
                            <foreignObject style="overflow: visible;" x="446.8" y="270" width="49.60000000000002"
                                           height="20"><span class="ct-label ct-horizontal ct-end"
                                                             style="width: 50px; height: 20px"
                                                             xmlns="http://www.w3.org/1999/xhtml">'14</span>
                            </foreignObject>
                            <foreignObject style="overflow: visible;" x="496.40000000000003" y="270"
                                           width="49.599999999999966" height="20"><span
                                        class="ct-label ct-horizontal ct-end" style="width: 50px; height: 20px"
                                        xmlns="http://www.w3.org/1999/xhtml">'15</span></foreignObject>
                            <foreignObject style="overflow: visible;" y="240" x="10" height="25" width="30"><span
                                        class="ct-label ct-vertical ct-start" style="height: 25px; width: 30px"
                                        xmlns="http://www.w3.org/1999/xhtml">0</span></foreignObject>
                            <foreignObject style="overflow: visible;" y="215" x="10" height="25" width="30"><span
                                        class="ct-label ct-vertical ct-start" style="height: 25px; width: 30px"
                                        xmlns="http://www.w3.org/1999/xhtml">100</span></foreignObject>
                            <foreignObject style="overflow: visible;" y="190" x="10" height="25" width="30"><span
                                        class="ct-label ct-vertical ct-start" style="height: 25px; width: 30px"
                                        xmlns="http://www.w3.org/1999/xhtml">200</span></foreignObject>
                            <foreignObject style="overflow: visible;" y="165" x="10" height="25" width="30"><span
                                        class="ct-label ct-vertical ct-start" style="height: 25px; width: 30px"
                                        xmlns="http://www.w3.org/1999/xhtml">300</span></foreignObject>
                            <foreignObject style="overflow: visible;" y="140" x="10" height="25" width="30"><span
                                        class="ct-label ct-vertical ct-start" style="height: 25px; width: 30px"
                                        xmlns="http://www.w3.org/1999/xhtml">400</span></foreignObject>
                            <foreignObject style="overflow: visible;" y="115" x="10" height="25" width="30"><span
                                        class="ct-label ct-vertical ct-start" style="height: 25px; width: 30px"
                                        xmlns="http://www.w3.org/1999/xhtml">500</span></foreignObject>
                            <foreignObject style="overflow: visible;" y="90" x="10" height="25" width="30"><span
                                        class="ct-label ct-vertical ct-start" style="height: 25px; width: 30px"
                                        xmlns="http://www.w3.org/1999/xhtml">600</span></foreignObject>
                            <foreignObject style="overflow: visible;" y="65" x="10" height="25" width="30"><span
                                        class="ct-label ct-vertical ct-start" style="height: 25px; width: 30px"
                                        xmlns="http://www.w3.org/1999/xhtml">700</span></foreignObject>
                            <foreignObject style="overflow: visible;" y="40" x="10" height="25" width="30"><span
                                        class="ct-label ct-vertical ct-start" style="height: 25px; width: 30px"
                                        xmlns="http://www.w3.org/1999/xhtml">800</span></foreignObject>
                            <foreignObject style="overflow: visible;" y="15" x="10" height="25" width="30"><span
                                        class="ct-label ct-vertical ct-start" style="height: 25px; width: 30px"
                                        xmlns="http://www.w3.org/1999/xhtml">900</span></foreignObject>
                            <foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span
                                        class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px"
                                        xmlns="http://www.w3.org/1999/xhtml">1000</span></foreignObject>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="red">
                    <i class="material-icons">pie_chart</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">Pie Chart</h4>
                </div>
                <div id="chartPreferences" class="ct-chart">
                    <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="230px"
                         class="ct-chart-pie" style="width: 100%; height: 230px;">
                        <g class="ct-series ct-series-c">
                            <path d="M280.5,5A110,110,0,0,0,239.65,12.867L280.5,115Z" class="ct-slice-pie"
                                  ct:value="6"></path>
                        </g>
                        <g class="ct-series ct-series-b">
                            <path d="M240.006,12.725A110,110,0,0,0,205.48,195.449L280.5,115Z" class="ct-slice-pie"
                                  ct:value="32"></path>
                        </g>
                        <g class="ct-series ct-series-a">
                            <path d="M205.2,195.187A110,110,0,1,0,280.5,5L280.5,115Z" class="ct-slice-pie"
                                  ct:value="62"></path>
                        </g>
                        <g>
                            <text dx="331.63770672385385" dy="135.24685039765728" text-anchor="middle" class="ct-label">
                                62%
                            </text>
                            <text dx="226.47420120992211" dy="104.6940276977852" text-anchor="middle" class="ct-label">
                                32%
                            </text>
                            <text dx="270.1940276977851" dy="60.974201209922136" text-anchor="middle" class="ct-label">
                                6%
                            </text>
                        </g>
                    </svg>
                </div>
                <div class="card-footer">
                    <h6>Legend</h6>
                    <i class="fa fa-circle text-info"></i> Apple
                    <i class="fa fa-circle text-warning"></i> Samsung
                    <i class="fa fa-circle text-danger"></i> Windows Phone
                </div>
            </div>
        </div>
    </div>
@endsection
