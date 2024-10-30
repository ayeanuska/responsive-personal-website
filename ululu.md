<header>
        <h1> My Hobbies </h1>
    </header>

    <main>
        <ul class="hobby-list">
            <li class="hobby-item" data-hobby="hobby1">Digital content creating</li>
            <li class="hobby-item" data-hobby="hobby2">Traveling and adventure</li>
            <li class="hobby-item" data-hobby="hobby3">Singing</li>
        </ul>   

        <div id="hobby1" class="hobby-gallery hidden">
             <h2>Fashion/lifestyle/Art directing</h2>
                <img src="assets/image/IMG_7976.JPG" alt=" digital content 1">
                <img src="assets/image/IMG_7407.jpeg" alt="digital content 2">
                <img src="assets/image/IMG_6333.jpeg" alt="digital content 3">
                <img src="assets/image/AYE.JPG" alt="digital content 3">
        </div>

        <div id="hobby2" class="hobby-gallery hidden">
            <h2> Travel and Adventure</h2>
            <img src="assets/image/IMG_0142.JPG" alt=" Trave &adventure Image 1">
            <img src="assets/image/IMG_3516.JPG" alt="Travel & adventure Image  2">
            <img src="assets/image/IMG_4460.jpeg" alt="Travel & adventure Image  3">
            <img src="assets/image/IMG_0751.jpeg" alt="Travel & adventure Image  3">
        </div>

        <div id="hobby3" class="hobby-gallery hidden">
            <h2>Singing</h2>
            <img src="photo1.jpg" alt=" Image 1">
            <img src="photo2.jpg" alt=" Image 3">
        </div>
    </main>

    <footer> 
        <h2> Get in touch with me </h2>
        <a href ="mailto:ayeanuska@gmail.com">Email</a> 
        <a href ="mailto:ayeanuska@gmail.com">Instagram</a> 
        <a href ="mailto:ayeanuska@gmail.com">Linkedin</a> 
    </footer>

    <script>const hobbies = document.querySelectorAll('.hobby-item');
        const galleries = document.querySelectorAll('.hobby-gallery');
        
        hobbies.forEach(hobby => {
            hobby.addEventListener('click', () => {
                // Hide all galleries
                galleries.forEach(gallery => {
                    gallery.classList.add('hidden');
                });
        
                // Show the selected hobby's gallery
                const selectedGallery = document.getElementById(hobby.dataset.hobby);
                selectedGallery.classList.remove('hidden');
            });
        });
        </script>


table{
  justify-content: center;
  align-items: center;
  width: 20%; 
  height: auto; 
 }