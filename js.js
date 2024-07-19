document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.card');
  
    cards.forEach(card => {
      VanillaTilt.init(card, {
        max: 15,
        speed: 400,
        glare: true,
        'max-glare': 0.2,
      });
  
      const handleMouseMove = (e) => {
        let x = e.pageX - (window.innerWidth / 2);
        let y = e.pageY - (window.innerHeight / 2);
        card.style.transform = `translate(${x / 40}px, ${y / 40}px)`;
      };
  
      window.addEventListener('mousemove', handleMouseMove);
  
      return () => {
        window.removeEventListener('mousemove', handleMouseMove);
      };
    });
  });
  