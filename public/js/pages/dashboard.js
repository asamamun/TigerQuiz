/**
 *
 * Dashboard
 *
 * Dashboard.html page content scripts. Initialized from scripts.js file.
 *
 *
 */

class Dashboard {
  constructor() {
    // References to page items that might require an update
    this._horizontalTooltipChart = null;

    // Initialization of the page plugins
    if (typeof Chart !== 'undefined' && typeof ChartsExtend !== 'undefined') {
      this._initCustomTooltipBar();
    } else {
      console.error('[CS] ChartsExtend is undefined.');
    }

    if (jQuery().barrating) {
      this._initBarrating();
    } else {
      console.error('[CS] jQuery().barrating is undefined.');
    }
    this._initEvents();
  }

  _initCustomTooltipBar() {
    if (document.getElementById('horizontalTooltipChart')) {
      const ctx = document.getElementById('horizontalTooltipChart').getContext('2d');
      this._horizontalTooltipChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['January', 'February', 'March', 'April'],
          datasets: [
            {
              label: 'Breads',
              icon: 'bread',
              borderColor: Globals.primary,
              backgroundColor: 'rgba(' + Globals.primaryrgb + ',0.1)',
              data: [456, 479, 424, 569],
              borderWidth: 2,
            },
            {
              label: 'Patty',
              icon: 'loaf',
              borderColor: Globals.secondary,
              backgroundColor: 'rgba(' + Globals.secondaryrgb + ',0.1)',
              data: [364, 504, 605, 400],
              borderWidth: 2,
            },
          ],
        },
        options: {
          cornerRadius: parseInt(Globals.borderRadiusMd),
          plugins: {
            crosshair: false,
            datalabels: {display: false},
          },
          responsive: true,
          maintainAspectRatio: false,
          legend: {
            position: 'bottom',
            labels: ChartsExtend.LegendLabels(),
          },
          scales: {
            yAxes: [
              {
                gridLines: {
                  display: true,
                  lineWidth: 1,
                  color: Globals.separator,
                  drawBorder: false,
                },
                ticks: {
                  beginAtZero: true,
                  stepSize: 100,
                  min: 300,
                  max: 800,
                  padding: 20,
                },
              },
            ],
            xAxes: [
              {
                gridLines: {display: false},
              },
            ],
          },
          tooltips: {
            enabled: false,
            custom: function (tooltip) {
              const tooltipEl = this._chart.canvas.parentElement.querySelector('.custom-tooltip');
              if (tooltip.opacity === 0) {
                tooltipEl.style.opacity = 0;
                return;
              }
              tooltipEl.classList.remove('above', 'below', 'no-transform');
              if (tooltip.yAlign) {
                tooltipEl.classList.add(tooltip.yAlign);
              } else {
                tooltipEl.classList.add('no-transform');
              }
              if (tooltip.body) {
                const chart = this;
                const index = tooltip.dataPoints[0].index;
                const datasetIndex = tooltip.dataPoints[0].datasetIndex;
                const icon = tooltipEl.querySelector('.icon');
                const iconContainer = tooltipEl.querySelector('.icon-container');
                iconContainer.style = 'border-color: ' + tooltip.labelColors[0].borderColor + '!important';
                icon.style = 'color: ' + tooltip.labelColors[0].borderColor + ';';
                icon.setAttribute('data-cs-icon', chart._data.datasets[datasetIndex].icon);
                csicons.replace();
                tooltipEl.querySelector('.text').innerHTML = chart._data.datasets[datasetIndex].label.toLocaleUpperCase();
                tooltipEl.querySelector('.value').innerHTML = chart._data.datasets[datasetIndex].data[index];
              }
              const positionY = this._chart.canvas.offsetTop;
              const positionX = this._chart.canvas.offsetLeft;
              tooltipEl.style.opacity = 1;
              tooltipEl.style.left = positionX + tooltip.dataPoints[0].x - 75 + 'px';
              tooltipEl.style.top = positionY + tooltip.caretY + 'px';
            },
          },
        },
      });
    }
  }

  // Rating initialize
  _initBarrating() {
    jQuery('.rating').each(function () {
      const current = jQuery(this).data('initialRating');
      const readonly = jQuery(this).data('readonly');
      const showSelectedRating = jQuery(this).data('showSelectedRating');
      const showValues = jQuery(this).data('showValues');
      jQuery(this).barrating({
        initialRating: current,
        readonly: readonly,
        showValues: showValues,
        showSelectedRating: showSelectedRating,
        onSelect: function (value, text) {},
        onClear: function (value, text) {},
      });
    });
  }

  // Listening for color change events to update charts
  _initEvents() {
    document.documentElement.addEventListener(Globals.colorAttributeChange, (event) => {
      this._horizontalTooltipChart && this._horizontalTooltipChart.destroy();
      this._initCustomTooltipBar();
    });
  }
}
