
    // responsive navbar 
    const menuicon = document.getElementById('menu-icon');
    const navmenu = document.getElementById('nav-menu');
    const hamburgerIcon = document.getElementById('hamburger-icon');
    const silangIcon = document.getElementById('silang-icon');
    menuicon.addEventListener('click', () => {
      navmenu.classList.toggle('hidden');
      navmenu.classList.toggle('flex');
      navmenu.classList.toggle('flex-col');
      navmenu.classList.toggle('bg-gray-900');
      navmenu.classList.toggle('p-4');
      navmenu.classList.toggle('absolute');
      navmenu.classList.toggle('top-16');
      navmenu.classList.toggle('right-4');
      navmenu.classList.toggle('rounded-lg');
      hamburgerIcon.classList.toggle('hidden');
      silangIcon.classList.toggle('hidden');
    });


    // untuk animasi mengetik
  const teks = [" Sewa PS3 & PS 4 Terbaik di kota Tulungagung", "bukan hanya tempat sewa ps", "tapi juga tempat untuk nongkrong bareng teman-temanmu!"];
  const typing = document.getElementById("typing");
  let i = 0, j = 0;
  let deleting = false;

  function type() {
    const current = teks[i];
    typing.textContent = current.slice(0, j);

    if (!deleting && j < current.length) {
      j++;
      setTimeout(type, 100);
    } else if (deleting && j > 0) {
      j--;
      setTimeout(type, 60);
    } else {
      deleting = !deleting;
      if (!deleting) i = (i + 1) % teks.length;
      setTimeout(type, 800);
    }
  }

  type();

// unutk looping review
  const track = document.querySelector('.animate-marquee');
  if(track ) {
    track.innerHTML += track.innerHTML;
  }