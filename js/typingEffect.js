const typingText = document.getElementById('typing-text');

new Typewriter(typingText, {
  strings: [
    `<a class="hashtag">#dataviz</a> <a class="hashtag">#machinelearning</a> <a class="hashtag">#deeplearning</a>.`,
    `<a class="hashtag">#pandas</a> <a class="hashtag">#d3.js</a> <a class="hashtag">#powerbi</a>.`,
    `<a class="hashtag">#sklearn</a>.`
],
  autoStart: true,
  loop: true,
});