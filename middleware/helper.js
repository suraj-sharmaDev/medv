
const b64toBlob = (b64Data, contentType='', sliceSize=512) => {
  b64Data = b64Data.split('base64,')[1];
  const byteCharacters = atob(b64Data);
  const byteArrays = [];

  for (let offset = 0; offset < byteCharacters.length; offset += sliceSize) {
    const slice = byteCharacters.slice(offset, offset + sliceSize);

    const byteNumbers = new Array(slice.length);
    for (let i = 0; i < slice.length; i++) {
      byteNumbers[i] = slice.charCodeAt(i);
    }

    const byteArray = new Uint8Array(byteNumbers);
    byteArrays.push(byteArray);
  }

  const blob = new Blob(byteArrays, {type: contentType});
  return blob;
}

const uploadImage = async(images, url) => {
	if(Object.keys(images).length == 0){
		return false;
	}
	for (var key in images) {
		console.log('start uploading...');

		var base64 = images[key];
		var rndName = Math.random().toString(36).substring(7);
		var mimeType = base64.split(';')[0].split(':')[1]; 
		var type = base64.split(';')[0].split('/')[1];
		var imageName = rndName+'.'+type;
		var blob = b64toBlob(base64, mimeType);
		formData.append('OrderId', orderId);
		formData.append('file', blob, imageName);
		const response = await fetch(url,{
			method : 'POST',
			body : formData
		})

		const result = await response.text();
		console.log(result);
	}
	return true;
}