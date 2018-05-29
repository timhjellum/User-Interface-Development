const gulp = require('gulp');
//const cleanCSS = require('gulp-clean-css');
//const less = require('gulp-less');
const rename = require('gulp-rename');
const path = require('path');
const del = require('del');
const removeCode = require('gulp-remove-code');

const server = '//WWWDEV/website/adaptive/';

const analysis      = '//WWWDEV/website/adaptive/analysis/includes';
const coal          = '//WWWDEV/website/adaptive/coal/includes';
const consumption   = '//WWWDEV/website/adaptive/consumption/includes';
const electricity   = '//WWWDEV/website/adaptive/electricity/includes';
const environment   = '//WWWDEV/website/adaptive/environment/includes';
const finance       = '//WWWDEV/website/adaptive/finance/includes';
const naturalGas    = '//WWWDEV/website/adaptive/naturalgas/includes';
const nuclear       = '//WWWDEV/website/adaptive/nuclear/includes';
const petroleum     = '//WWWDEV/website/adaptive/petroleum/includes';
const renewable     = '//WWWDEV/website/adaptive/renewable/includes';
const totalEnergyMonthly   	= '//WWWDEV/website/adaptive/totalenergy/data/monthly/includes';
const totalEnergyAnnual   	= '//WWWDEV/website/adaptive/totalenergy/data/annual/includes';
const styleFolder   = '//WWWDEV/website/adaptive/style-guide/assets/styles';






// gulp xfer2adaptive


gulp.task('xfer2adaptive', ['xfer-analysis']);

gulp.task('xfer-analysis', ['xfer-coal'], () =>
	gulp.src('./analysis/includes/main-data.html')
	.pipe(removeCode({ INCconversion: true }))
	.pipe(rename('main-data.inc'))
	.pipe(gulp.dest(analysis))
);
gulp.task('xfer-coal', ['xfer-consumption'], () =>
	gulp.src('./coal/includes/main-data.html')
	.pipe(removeCode({ INCconversion: true }))
	.pipe(rename('main-data.inc'))
	.pipe(gulp.dest(coal))
);
gulp.task('xfer-consumption', ['xfer-electricity'], () =>
	gulp.src('./consumptionl/includes/main-data.html')
	.pipe(removeCode({ INCconversion: true }))
	.pipe(rename('main-data.inc'))
	.pipe(gulp.dest(consumption))
);
gulp.task('xfer-electricity', ['xfer-environment'], () =>
	gulp.src('./electricityl/includes/main-data.html')
	.pipe(removeCode({ INCconversion: true }))
	.pipe(rename('main-data.inc'))
	.pipe(gulp.dest(electricity))
);
gulp.task('xfer-environment', ['xfer-finance'], () =>
	gulp.src('./environmentl/includes/main-data.html')
	.pipe(removeCode({ INCconversion: true }))
	.pipe(rename('main-data.inc'))
	.pipe(gulp.dest(environment))
);
gulp.task('xfer-finance', ['xfer-natural-gas'], () =>
	gulp.src('./financel/includes/main-data.html')
	.pipe(removeCode({ INCconversion: true }))
	.pipe(rename('main-data.inc'))
	.pipe(gulp.dest(finance))
);
gulp.task('xfer-natural-gas', ['xfer-nuclear'], () =>
	gulp.src('./naturalgasl/includes/main-data.html')
	.pipe(removeCode({ INCconversion: true }))
	.pipe(rename('main-data.inc'))
	.pipe(gulp.dest(naturalGas))
);
gulp.task('xfer-nuclear', ['xfer-petroleum'], () =>
	gulp.src('./nuclearl/includes/main-data.html')
	.pipe(removeCode({ INCconversion: true }))
	.pipe(rename('main-data.inc'))
	.pipe(gulp.dest(nuclear))
);
gulp.task('xfer-petroleum', ['xfer-renewable'], () =>
	gulp.src('./petroleuml/includes/main-data.html')
	.pipe(removeCode({ INCconversion: true }))
	.pipe(rename('main-data.inc'))
	.pipe(gulp.dest(petroleum))
);
gulp.task('xfer-renewable', ['xfer-total-energy-monthly'], () =>
	gulp.src('./renewablel/includes/main-data.html')
	.pipe(removeCode({ INCconversion: true }))
	.pipe(rename('main-data.inc'))
	.pipe(gulp.dest(renewable))
);
gulp.task('xfer-total-energy-monthly', ['xfer-total-energy-annual'], () =>
	gulp.src('./totalenergy/data/monthly/includes/main-data.html')
	.pipe(removeCode({ INCconversion: true }))
	.pipe(rename('main-data.inc'))
	.pipe(gulp.dest(totalEnergyMonthly))
);
gulp.task('xfer-total-energy-annual', ['xfer-style-folder'], () =>
	gulp.src('./totalenergy/data/annual/includes/main-data.html')
	.pipe(removeCode({ INCconversion: true }))
	.pipe(rename('main-data.inc'))
	.pipe(gulp.dest(totalEnergyAnnual))
);
gulp.task('xfer-style-folder', ['pmm-release-date'], () =>
	gulp.src('./style-guide/assets/styles/**/*')
	.pipe(gulp.dest(styleFolder))
);

gulp.task('pmm-release-date', ['biofuels-release-date'], () =>
gulp.src('/petroleum/marketing/monthly/includes/pmm-release-date.inc')
.pipe(gulp.dest(server + '/petroleum/marketing/monthly/includes'))
);
gulp.task('biofuels-release-date', ['ngmer-release-date'], () =>
gulp.src('/biofuels/biomass/includes/biofuels-release-date.inc')
.pipe(gulp.dest(server + '/biofuels/biomass/includes'))
);
gulp.task('ngmer-release-date', ['wngsr-release-date'], () =>
gulp.src('/dnav/ng/includes_ng/ngmer-release-date.inc')
.pipe(gulp.dest(server + '/dnav/ng/includes_ng'))
);
gulp.task('wngsr-release-date', ['petmer-release-date'], () =>
gulp.src('/dnav/ng/includes_ng/wngsr-release-date.inc')
.pipe(gulp.dest(server + '/dnav/ng/includes_ng'))
);
gulp.task('petmer-release-date', ['epa-release-date'], () =>
gulp.src('/dnav/pet/includes/petmer-release-date.inc')
.pipe(gulp.dest(server + '/dnav/pet/includes'))
);
gulp.task('epa-release-date', ['electricity-data-browser'], () =>
gulp.src('/electricity/annual/epa-release-date.inc')
.pipe(gulp.dest(server + '/electricity/includes/annual'))
);
gulp.task('electricity-data-browser', ['epm-release-date'], () =>
gulp.src('/electricity/monthly/includes/electricity-data-browser.inc')
.pipe(gulp.dest(server + '/electricity/monthly'))
);
gulp.task('epm-release-date', ['esr-header'], () =>
gulp.src('/electricity/monthly/epm-release-date.inc')
.pipe(gulp.dest(server + '/electricity/monthly/includes'))
);
gulp.task('esr-header', ['annual-release-date'], () =>
gulp.src('/electricity/sales_revenue_price/esr-header.inc')
.pipe(gulp.dest(server + '/electricity/sales_revenue_price/includes'))
);
gulp.task('annual-release-date', ['fcml-release-date'], () =>
gulp.src('/naturalgas/annual/includes/annual-release-date.inc')
.pipe(gulp.dest(server + '/naturalgas/annual/includes'))
);
gulp.task('fcml-release-date', ['monthly-release-date'], () =>
gulp.src('/naturalgas/fieldcode/includes/fcml-release-date.inc')
.pipe(gulp.dest(server + '/naturalgas/fieldcode/includes'))
);
gulp.task('monthly-release-date', ['steo-release-date'], () =>
gulp.src('/naturalgas/monthly/includes/monthly-release-date.inc')
.pipe(gulp.dest(server + '/naturalgas/monthly/includes'))
);
gulp.task('steo-release-date', ['gdu-release-date'], () =>
gulp.src('/outlooks/steo/includes/steo-release-date.inc')
.pipe(gulp.dest(server + '/outlooks/steo/includes'))
);
gulp.task('gdu-release-date', ['release-date_pmm'], () =>
gulp.src('/petroleum/gasdiesel/include/gdu-release-date.inc')
.pipe(gulp.dest(server + '/petroleum/gasdiesel/includes'))
);
gulp.task('release-date_pmm', ['psr-release-date'], () =>
gulp.src('/petroleum/marketing/monthly/includes/release-date_pmm.inc')
.pipe(gulp.dest(server + '/petroleum/marketing/monthly/includes'))
);
gulp.task('psr-release-date', ['914-release-date'], () =>
gulp.src('/petroleum/marketing/prime/includes/psr-release-date.inc')
.pipe(gulp.dest(server + '/petroleum/marketing/prime/includes'))
);
gulp.task('914-release-date', ['psa-release-date'], () =>
gulp.src('/petroleum/production/includes/914-release-date.inc')
.pipe(gulp.dest(server + '/petroleum/production/includes'))
);
gulp.task('psa-release-date', ['psm-release-date'], () =>
gulp.src('/petroleum/supply/annual/volume1/includes/psa-release-date.inc')
.pipe(gulp.dest(server + '/petroleum/supply/annual/volume1/includes'))
);
gulp.task('psm-release-date', ['release-date_wpsrshopp'], () =>
gulp.src('/petroleum/supply/monthly/includes/psm-release-date.inc')
.pipe(gulp.dest(server + '/petroleum/supply/monthly/includes/psm-release-date.inc'))
);
gulp.task('release-date_wpsrshopp', ['wpsr-release-date'], () =>
gulp.src('/petroleum/supply/weekly/includes/release-date_wpsrshopp.inc')
.pipe(gulp.dest(server + '/petroleum/supply/weekly/includes'))
);
gulp.task('wpsr-release-date', ['wpsrshopp-release-date'], () =>
gulp.src('/petroleum/supply/weekly/includes/wpsr-release-date.inc')
.pipe(gulp.dest(server + '/petroleum/supply/weekly/includes'))
);
gulp.task('wpsrshopp-release-date', ['wspr-release-date'], () =>
gulp.src('/petroleum/supply/weekly/includes/wpsrshopp-release-date.inc')
.pipe(gulp.dest(server + '/petroleum/supply/weekly/includes'))
);
gulp.task('wspr-release-date', ['afv-release-date'], () =>
gulp.src('/petroleum/supply/weekly/includes/wspr-release-date.inc')
.pipe(gulp.dest(server + '/petroleum/supply/weekly/includes'))
);
gulp.task('afv-release-date', ['renewable-header'], () =>
gulp.src('/renewable/afv/afv-release-date.inc')
.pipe(gulp.dest(server + '/renewable/afv/includes'))
);
gulp.task('renewable-header', ['new-aer-header'], () =>
gulp.src('/renewable/monthly/solar_photo/includes/renewable-header.inc')
.pipe(gulp.dest(server + '/renewable/monthly/solar_photo/includes'))
);
gulp.task('new-aer-header', ['new-mer-header'], () =>
gulp.src('/totalenergy/data/annual/includes/new-aer-header.inc')
.pipe(gulp.dest(server + '/totalenergy/data/annual/includes'))
);
gulp.task('new-mer-header', ['uma-new-header'], () =>
gulp.src('/totalenergy/data/monthly/includes/new-mer-header.inc')
.pipe(gulp.dest(server + '/totalenergy/data/monthly/includes'))
);
gulp.task('uma-new-header', () =>
gulp.src('/uranium/production/quarterly/html/uma-new-header.inc')
.pipe(gulp.dest(server + '/uranium/production/quarterly/includes'))
);