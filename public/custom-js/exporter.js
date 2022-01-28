function exportTextFile(filename, content) {
    // save into a file
    var blob = new Blob([content],
    { type: "text/plain;charset=utf-8" });

    saveAs(blob, filename);
  }