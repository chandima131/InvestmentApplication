<x-admin-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @role('admin')
                {{ __('Admin Dashboard') }}
                <a href="{{ route('admin.admintest')}}" class="px-5 py-2 bg-green-400 text-white cursor-pointer">Link</a>
            @endrole

            @role('editor')
                {{ __('Editor Dashboard') }}
                <a href="{{ route('admin.editortest')}}" class="px-5 py-2 bg-green-400 text-white cursor-pointer">Link</a>
            @endrole


            {{-- check permission --}}
            @permission('add-post')
                <button type="button" class="px-5 py-2 bg-green-400 text-white">Add Post</button>
            @endpermission

            @permission('delete-post')
                <button type="button" class="px-5 py-2 bg-red-400 text-white">Delete Post</button>
            @endpermission

            <a href="{{ route('admin.posts.index') }}" class="px-5 py-2 bg-red-400 text-white">Posts</a>
        </h2>
    </x-slot> -->

<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <section id="menu">
    <div class="sidebar">
        <section id="menu">
            <div class="items">
                <ul>
                    <li> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3 13.125C3 12.504 3.504 12 4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75zM9.75 8.625c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V8.625zM16.5 4.125c0-.621.504-1.125 1.125-1.125h2.25C20.496 3 21 3.504 21 4.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125z" />
</svg>
                    <a href="{{url('admin/dashboard')}}"> Dashboard </a> </li>
                    <li> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
</svg>
                    <a href="{{ url('/admin/add_ideas')}}"> Add New Idea </a> </li>
                    <li> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
</svg>
                    <a href="{{ url('/aboutus')}}"> About Us </a> </li>
                    <!-- <li> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
  <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
</svg>

                    <a href="#"> Settings </a> </li> -->
                </ul>
            </div>
    </div>
    </section>

<section id="interface">
<h3 class="i-name"> &nbsp About Us </h3>

<div class= "values">
    <div class="board">
    <h3> Brief </h3>
    <br>
    <p>Welcome to our website! We are a group of four enthusiastic students pursuing our Masters in Computer Application at Anglia Ruskin University in Cambridge. 
    As part of our course on Advanced Web Solution, we have come together to create this website with the aim of showcasing our technical skills, creativity, 
    and passion for web development. With a keen eye for detail and a collaborative approach, we have worked tirelessly to bring our vision to life. 
    We hope you enjoy exploring our website and appreciate the effort we have put into designing and building it. Thank you for visiting and supporting our work!</p>
    <p></p>
    
    <p>We have created this platform with the aim of providing valuable suggestions and insights on stock and crypto trading to our users. 
    Whether you are a beginner looking for guidance or an experienced trader seeking new ideas, our website is here to help. 
    Our team of experts researches and analyzes market trends, news, and data to provide up-to-date information and recommendations. In addition to trading tips, we also encourage content creators to share their knowledge through articles, making them accessible to our clients. We are dedicated to providing a user-friendly experience and a reliable source of information for investors of all levels. Thank you for visiting our website and trusting us with your investment journey!</p>
    
 <h3>Our Team</h3>   
    <section id="team-section">
    
      <div class="team-member">
        <img src="https://tse4.mm.bing.net/th?id=OIP.c_owsJjZC6YtPfAUhxPJ9gHaIB&pid=Api&P=0" alt="Vinayak">
        <h3>Vinayak</h3>
        <ul class="social-icons">
          <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        </ul>
      </div>
      <div class="team-member">
        <img src="https://tse3.mm.bing.net/th?id=OIP.LohCmlsAoU2gLEs6-IHovAHaHa&pid=Api&P=0" alt="Chandima">
        <h3>Chandima</h3>
        <ul class="social-icons">
            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        </ul>
      </div>
      <div class="team-member">
        <img src="https://tse4.mm.bing.net/th?id=OIP.fm6aEAVBgHWqxykc--WQ5gHaFj&pid=Api&P=0" alt="Riya">
        <h3>Riya</h3>
        <ul class="social-icons">
          <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        </ul>
      </div>
      <div class="team-member">
        <img src="https://tse4.mm.bing.net/th?id=OIP.9AmvYdOWI4RrUtAkwroCHQHaEU&pid=Api&P=0" alt="Lokesh">
        <h3>Lokesh</h3>
        <ul class="social-icons">
          <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </section>
    
</div>
</section>


        <!-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            where this?
                <div class="p-6 bg-white border-b border-gray-200">
                   where this
                </div>
            </div>
        </div> -->
    </div>
</x-admin-layout>



<!-- 
<!DOCTYPE html>
<html>
<head>
  <title>About Us</title>
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <header>
    <img src="http://127.0.0.1:8000/images/logo.png" alt="Brix">
    <h1>About Us</h1>
    <p>Investing in Your Future</p>
  </header>
  <nav>
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="portfolio.html">Portfolio</a></li>
      <li><a href="about.html" class="active">About Us</a></li>
      <li><a href="contact.html">Contact</a></li>
    </ul>
  </nav>
  <main>
    <section id="about-section">
      <h2>Our Story</h2>
      <p>Welcome to our website! We are a group of four enthusiastic students pursuing our Masters in Computer Application at Anglia Ruskin University in Cambridge. As part of our course on Advanced Web Solution, we have come together to create this website with the aim of showcasing our technical skills, creativity, and passion for web development. With a keen eye for detail and a collaborative approach, we have worked tirelessly to bring our vision to life. We hope you enjoy exploring our website and appreciate the effort we have put into designing and building it. Thank you for visiting and supporting our work!</p>
      <p></p>
      <p>We have created this platform with the aim of providing valuable suggestions and insights on stock and crypto trading to our users. Whether you are a beginner looking for guidance or an experienced trader seeking new ideas, our website is here to help. Our team of experts researches and analyzes market trends, news, and data to provide up-to-date information and recommendations. In addition to trading tips, we also encourage content creators to share their knowledge through articles, making them accessible to our clients. We are dedicated to providing a user-friendly experience and a reliable source of information for investors of all levels. Thank you for visiting our website and trusting us with your investment journey!</p>
    </section>
    <section id="team-section">
      <h2>Our Team</h2>
      <div class="team-member">
        <img src="https://tse4.mm.bing.net/th?id=OIP.c_owsJjZC6YtPfAUhxPJ9gHaIB&pid=Api&P=0" alt="Vinayak">
        <h3>Vinayak</h3>
        <ul class="social-icons">
          <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        </ul>
      </div>
      <div class="team-member">
        <img src="https://tse3.mm.bing.net/th?id=OIP.LohCmlsAoU2gLEs6-IHovAHaHa&pid=Api&P=0" alt="Chandima">
        <h3>Chandima</h3>
        <ul class="social-icons">
            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        </ul>
      </div>
      <div class="team-member">
        <img src="https://tse4.mm.bing.net/th?id=OIP.fm6aEAVBgHWqxykc--WQ5gHaFj&pid=Api&P=0" alt="Riya">
        <h3>Riya</h3>
        <ul class="social-icons">
          <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        </ul>
      </div>
      <div class="team-member">
        <img src="https://tse4.mm.bing.net/th?id=OIP.9AmvYdOWI4RrUtAkwroCHQHaEU&pid=Api&P=0" alt="Lokesh">
        <h3>Lokesh</h3>
        <ul class="social-icons">
          <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        </ul>
      </div>
    </section>
  </main>
  <footer>
    <p>Contact us at: <a href="mailto:info@investmentapp.com">info@investmentapp.com</a></p>
  </footer>
</body>
</html>
<style>
/* Reset default margin and padding */
body, h1, h2, h3, p {
  margin: 0;
  padding: 0;
}

/* Set body font and background */
body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  color: #333;
}

/* Header styles */
header {
  background-color: #222;
  text-align: center;
  padding: 80px 0;
}

header h1 {
  font-size: 36px;
  color: #fff;
  margin-bottom: 20px;
}

header p {
  font-size: 18px;
  color: #ffcccb;
}

/* Navigation styles */
nav {
  background-color: #444;
  padding: 10px;
}

nav ul {
  list-style-type: none;
  display: flex;
  justify-content: center;
}

nav ul li {
  margin: 0 10px;
}

nav ul li a {
  color: #fff;
  text-decoration: none;
  padding: 5px;
}

nav ul li a:hover {
  color: #ffcccb;
}

/* Main content styles */
main {
  margin: 20px;
}

#about-section {
  margin-bottom: 40px;
}

#team-section {
  display: flex;
  justify-content: center;
}

.team-member {
  text-align: center;
  margin: 20px;
}

.team-member img {
  width: 150px;
  height: 150px;
  border-radius: 50%;
}

.social-icons {
  display: flex;
  justify-content: center;
  margin-top: 10px;
}

.social-icons li {
  margin: 0 5px;
}

.social-icons li a {
  color: #666;
  text-decoration: none;
  font-size: 24px;
}

.social-icons li a:hover {
  color: #ffcccb;
}

/* Footer styles */
footer {
  background-color: #222;
  color: #fff;
  text-align: center;
  padding: 10px;
}

footer a {
  color: #ffcccb;
  text-decoration: none;
}

footer a:hover {
  color: #fff;
}
</style> -->