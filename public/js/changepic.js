
document.getElementById('buttonid').addEventListener('click',
openDialog
);

function openDialog() {
     document.getElementById('image').click();
}
let loadFile = function(e) {
let image = document.getElementById('img-preview');
image.src = URL.createObjectURL(e.target.files[0]);
}
