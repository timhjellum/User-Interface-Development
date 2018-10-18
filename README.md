# User-Interface-Development
User Interface (CSS / Images / JS) Development Repository part of the CSS Rehab/Adaptive Project


# Setup

## Prerequisites

1.  Download and install Node.js (comes with NPM) from https://nodejs.org/en/download/
2.  Download and install Git (or equivelant) from https://git-scm.com/downloads

## Steps

1.  Using Bash CDM At the root of your local project folder clone the repository.
 
```
$ git clone https://github.com/timhjellum/User-Interface-Development.git
```

2.  Using Bash CDM within the project folder update your node modules

``
$ npm update
```

3.  Using Bash CDM install Gulp locally

``
$ npm install gulp
```

4.  Using Bash CDM run Gulp watch

``
$ gulp watch
```

If this doesn't work try:

``
$ npm run gulp
```





  |- style-guide
  |     |-------app
  | 	|       |- styles
  | 	|       |       L less
  | 	|	    L scripts
  | 	|		L modules
  | 	--------- src (style guide specific files -- do not edit please)
  | 	|       L images
  | 	|       L includes
  | 	|       L scripts
  | 	|       L styles
  | 	|       L vendor
  | 	---------  *.html (style guide specific files -- do not edit please)
======================================
  |- global (auto-generated)
        L images
        L includes
        L scripts
        L styles
        L vendor




# Testing

``
$ gulp test
```