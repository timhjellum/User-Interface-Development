const gulp = require('gulp');
//const cleanCSS = require('gulp-clean-css');
//const less = require('gulp-less');
const rename = require('gulp-rename');
const path = require('path');
const del = require('del');
const removeCode = require('gulp-remove-code');

const server = '//WWWDEV/website/css_rehab/archive/';

const analysis      		= 'analysis/includes';
const coal          		= 'coa/includes';
const consumption   		= 'consumption/includes';
const electricity   		= 'electricity/includes';
const environment   		= 'environment/includes';
const finance       		= 'finance/includes';
const naturalGas    		= 'naturalgas/includes';
const nuclear       		= 'nuclear/includes';
const petroleum     		= 'petroleum/includes';
const renewable     		= 'renewable/includes';
const totalEnergy   		= 'totalenergy/includes';
const totalEnergyMonthly  	= 'totalenergy/data/monthly/includes';
const totalEnergyAnnual  	= 'totalenergy/data/annua/includes';


gulp.task('xfer-release-dates', ['pmm-release-date']);

//gulp.task('xfer-analysis', ['xfer-coal'], () =>
//	gulp.src('./analysis/includes/data-side-content.inc')
//	.pipe(removeCode({ INCconversion: true }))
//	.pipe(rename('main-data.inc'))
//	.pipe(gulp.dest(server + analysis))
//);


gulp.task('pmm-release-date', ['biofuels-release-date'], () =>
gulp.src('/petroleum/marketing/monthly/includes/pmm-release-date.inc')
.pipe(gulp.dest(server + '/petroleum/marketing/monthly/includes'))
);
gulp.task('biofuels-release-date', ['ngmer-release-date'], () =>
gulp.src('/biofuels/biomass/includes/biofuels-release-date.inc')
.pipe(gulp.dest(server + '/biofuels/biomass/includes'))
);
gulp.task('ngmer-release-date', ['wngsr-release-date'], () =>
gulp.src('/dnav/ng/includes_ng/includes/ngmer-release-date.inc')
.pipe(gulp.dest(server + '/dnav/ng/includes_ng/includes'))
);
gulp.task('wngsr-release-date', ['petmer-release-date'], () =>
gulp.src('/dnav/ng/includes_ng/includes/wngsr-release-date.inc')
.pipe(gulp.dest(server + '/dnav/ng/includes_ng/includes'))
);
gulp.task('petmer-release-date', ['epa-release-date'], () =>
gulp.src('/dnav/pet/includes/petmer-release-date.inc')
.pipe(gulp.dest(server + '/dnav/pet/includes'))
);
gulp.task('epa-release-date', ['electricity-data-browser'], () =>
gulp.src('/electricity/annua/includes/epa-release-date.inc')
.pipe(gulp.dest(server + '/electricity/annua/includes'))
);
gulp.task('electricity-data-browser', ['epm-release-date'], () =>
gulp.src('/electricity/monthly/includes/electricity-data-browser.inc')
.pipe(gulp.dest(server + '/electricity/monthly/includes'))
);
gulp.task('epm-release-date', ['esr-header'], () =>
gulp.src('/electricity/monthly/includes/epm-release-date.inc')
.pipe(gulp.dest(server + '/electricity/monthly/includes'))
);
gulp.task('esr-header', ['annual-release-date'], () =>
gulp.src('/electricity/sales_revenue_price/includes/esr-header.inc')
.pipe(gulp.dest(server + '/electricity/sales_revenue_price/includes'))
);
gulp.task('annual-release-date', ['fcml-release-date'], () =>
gulp.src('/naturalgas/annua/includes/annual-release-date.inc')
.pipe(gulp.dest(server + '/naturalgas/annua/includes'))
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
gulp.task('gdu-release-date', ['psr-release-date'], () =>
gulp.src('/petroleum/gasdiesel/includes/gdu-release-date.inc')
.pipe(gulp.dest(server + '/petroleum/gasdiesel/includes'))
);

//gulp.task('pmm-release-date', ['psr-release-date'], () =>
//gulp.src('/petroleum/marketing/monthly/includes/pmm-release-date.inc')
//.pipe(gulp.dest(server + '/petroleum/marketing/monthly/includes'))
//);
gulp.task('psr-release-date', ['914-release-date'], () =>
gulp.src('/petroleum/marketing/prime/includes/psr-release-date.inc')
.pipe(gulp.dest(server + '/petroleum/marketing/prime/includes'))
);
gulp.task('914-release-date', ['psa-release-date'], () =>
gulp.src('/petroleum/production/includes/914-release-date.inc')
.pipe(gulp.dest(server + '/petroleum/production/includes'))
);
gulp.task('psa-release-date', ['psm-release-date'], () =>
gulp.src('/petroleum/supply/annua/volume1/includes/psa-release-date.inc')
.pipe(gulp.dest(server + '/petroleum/supply/annua/volume1/includes'))
);
gulp.task('psm-release-date', ['wpsrshopp-release-date'], () =>
gulp.src('/petroleum/supply/monthly/includes/psm-release-date.inc')
.pipe(gulp.dest(server + '/petroleum/supply/monthly/includes'))
);
gulp.task('wpsrshopp-release-date', ['wpsr-release-date'], () =>
gulp.src('/petroleum/supply/weekly/includes/wpsrshopp-release-date.inc')
.pipe(gulp.dest(server + '/petroleum/supply/weekly/includes'))
);
gulp.task('wpsr-release-date', ['wspr-release-date'], () =>
gulp.src('/petroleum/supply/weekly/includes/wpsr-release-date.inc')
.pipe(gulp.dest(server + '/petroleum/supply/weekly/includes'))
);
gulp.task('wspr-release-date', ['afv-release-date'], () =>
gulp.src('/petroleum/supply/weekly/includes/wspr-release-date.inc')
.pipe(gulp.dest(server + '/petroleum/supply/weekly/includes'))
);
gulp.task('afv-release-date', ['renewable-header'], () =>
gulp.src('/renewable/afv/includes/afv-release-date.inc')
.pipe(gulp.dest(server + '/renewable/afv/includes'))
);
gulp.task('renewable-header', ['new-aer-header'], () =>
gulp.src('/renewable/monthly/solar_photo/includes/renewable-header.inc')
.pipe(gulp.dest(server + '/renewable/monthly/solar_photo/includes'))
);
gulp.task('new-aer-header', ['new-mer-header'], () =>
gulp.src('/totalenergy/data/annua/includes/new-aer-header.inc')
.pipe(gulp.dest(server + '/totalenergy/data/annua/includes'))
);
gulp.task('new-mer-header', ['uma-new-header'], () =>
gulp.src('/totalenergy/data/monthly/includes/new-mer-header.inc')
.pipe(gulp.dest(server + '/totalenergy/data/monthly/includes'))
);
gulp.task('uma-new-header', () =>
gulp.src('/uranium/production/quarterly/htm/uma-new-header.inc')
.pipe(gulp.dest(server + '/uranium/production/quarterly/includes'))
);



