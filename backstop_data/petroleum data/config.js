report({
  "testSuite": "BackstopJS",
  "tests": [
    {
      "pair": {
        "reference": "..\\bitmaps_reference\\backstop_default_Petroleum_0_document_0_tablet.png",
        "test": "..\\bitmaps_test\\20180628-092455\\backstop_default_Petroleum_0_document_0_tablet.png",
        "selector": "document",
        "fileName": "backstop_default_Petroleum_0_document_0_tablet.png",
        "label": "Petroleum",
        "misMatchThreshold": 0.1,
        "url": "https://www.eia.gov/css_rehab/archive/petroleum/data.php",
        "referenceUrl": "https://www.eia.gov/petroleum/data.php",
        "diff": {
          "isSameDimensions": false,
          "dimensionDifference": {
            "width": 0,
            "height": -291
          },
          "misMatchPercentage": "11.80",
          "analysisTime": 232
        },
        "diffImage": "..\\bitmaps_test\\20180628-092455\\failed_diff_backstop_default_Petroleum_0_document_0_tablet.png"
      },
      "status": "fail"
    }
  ],
  "id": "backstop_default"
});