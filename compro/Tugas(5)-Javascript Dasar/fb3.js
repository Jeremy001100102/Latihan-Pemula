
//show left bar
const sidebarL = document.querySelector('.sidebar-left');
const tombol = document.querySelector('.tombol');
const classBefore = document.querySelector('.create-post');

tombol.addEventListener('click', function(e){
e.target.parentElement.parentElement.appendChild(sidebarL); 
sidebarL.style.display = 'block';
e.target.parentElement.parentElement.insertBefore(sidebarL, classBefore);
classBefore.style.marginTop = '110vw';
	
});


//hidden left bar
const hideTombol = document.querySelector('.hide-tombol');
hideTombol.addEventListener('click', function(){
		sidebarL.style.display = 'none';
		classBefore.style.marginTop = '0vw';
});



//keluar
const close = document.querySelector('.close');

close.addEventListener('click', function(e){
   e.target.parentElement.style.display = 'none';
});
