    

  // Get reference to the custom cursor element
  const customCursor = document.querySelector('.custom-cursor');

  // Function to update the position of the custom cursor
  function updateCursorPosition(event) {
    customCursor.style.transform = `translate(${event.clientX}px, ${event.clientY}px)`;
  }

  // Add event listeners to update cursor position
  document.addEventListener('mousemove', updateCursorPosition);

