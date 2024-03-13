// use this simple function to automatically focus on the next input
function focusNextInput(el, prevId, nextId) {
  if (el.value.length === 0) {
      if (prevId) {
          document.getElementById(prevId).focus();
      }
  } else {
      if (nextId) {
          document.getElementById(nextId).focus();
      }
  }
}

document.querySelectorAll('[data-focus-input-init]').forEach(function(element) {
  element.addEventListener('keyup', function() {
      const prevId = this.getAttribute('data-focus-input-prev');
      const nextId = this.getAttribute('data-focus-input-next');
      focusNextInput(this, prevId, nextId);
  });
});