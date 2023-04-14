$(document).ready(function() {
    const feednamiUrl = 'https://api.feednami.com/api/v1/feed/parse?' +
                        'url=' + encodeURIComponent('https://www.cnnbrasil.com.br/rss/?q=detran+transito') +
                        '&callback=?';
    
    $.getJSON(feednamiUrl, function(data) {
      $(data.entries).each(function() {
        const title = $(this)[0].title;
        const link = $(this)[0].link;
        
        $('#news-list').append('<li><a href="' + link + '">' + title + '</a></li>');
      });
    });
  });