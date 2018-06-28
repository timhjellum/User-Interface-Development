report({
  "testSuite": "BackstopJS",
  "tests": [
    {
      "pair": {
        "reference": "..\\bitmaps_reference\\backstop_default_Petroleum_0_document_0_tablet.png",
        "test": "..\\bitmaps_test\\20180628-092053\\backstop_default_Petroleum_0_document_0_tablet.png",
        "selector": "document",
        "fileName": "backstop_default_Petroleum_0_document_0_tablet.png",
        "label": "Petroleum",
        "misMatchThreshold": 0.1,
        "url": "https://www.eia.gov/css_rehab/archive/petroleum/index.php",
        "referenceUrl": "https://www.eia.gov/petroleum/index.php",
        "diff": {
          "isSameDimensions": false,
          "dimensionDifference": {
            "width": 0,
            "height": -82
          },
          "misMatchPercentage": "7.30",
          "analysisTime": 203
        },
        "diffImage": "..\\bitmaps_test\\20180628-092053\\failed_diff_backstop_default_Petroleum_0_document_0_tablet.png"
      },
      "status": "fail"
    }
  ],
  "id": "backstop_default"
});