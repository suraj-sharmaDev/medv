
function getBase64Image(id, img) {
    var canvas = document.createElement("canvas");
    canvas.width = img.width;
    canvas.height = img.height;
    console.log(img.width, img.height);
    // var ctx = canvas.getContext("2d");
    // ctx.drawImage(img, 0, 0);

    // var dataURL = canvas.toDataURL("image/png");

    // return dataURL.replace(/^data:image\/(png|jpg);base64,/, "");
}