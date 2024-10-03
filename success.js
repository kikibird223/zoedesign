// product_img preview
function previewImage(event, previewElementId) {
    const input = event.target;
    const preview = document.getElementById(previewElementId);

    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            preview.src = e.target.result; // 將 img 的 src 設置為讀取的數據
            preview.style.display = 'block'; // 顯示預覽圖像
        };
        reader.readAsDataURL(input.files[0]); // 讀取文件為數據URL
    } else {
        preview.src = ""; // 如果沒有選擇圖片，清空預覽
        preview.style.display = 'none'; // 隱藏預覽圖像
    }
}
//product_iframe preview
function previewIframe(event, previewElementId) {
    const input = event.target;
    const preview = document.getElementById(previewElementId);

    if (input.value) {
        preview.src = input.value; // 將 iframe 的 src 設置為輸入的 URL
        preview.style.display = 'block'; // 顯示預覽
    } else {
        preview.src = ""; // 如果沒有輸入，清空預覽
        preview.style.display = 'none'; // 隱藏預覽
    }
}

//清除圖片
function previewImage(event) {
    const imagePreview = document.getElementById('imagePreview');
    const file = event.target.files[0];
    
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            imagePreview.src = e.target.result; // Set the preview image source to the uploaded file
        }
        reader.readAsDataURL(file); // Convert the file to a data URL
    } else {
        imagePreview.src = ''; // Reset if no file is selected
    }
}
