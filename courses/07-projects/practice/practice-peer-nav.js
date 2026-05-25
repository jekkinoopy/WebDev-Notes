/**
 * 實作專區頁尾：專案間互相連結（頁首不變）
 * 用法：<div data-practice-peer-nav data-current="conan" data-base="../"></div>
 */
(function () {
  var PEERS = [
    { key: 'conan', label: '米花町入學登記', path: 'https://jekkinoopy.github.io/conan-school/' },
    { key: 'crayon', label: '春日部保健室', path: 'crayon/index.html' },
    { key: 'hub', label: '實作專案索引', path: 'index.html' }
  ];

  var mount = document.querySelector('[data-practice-peer-nav]');
  if (!mount) return;

  var current = mount.getAttribute('data-current') || '';
  var base = mount.getAttribute('data-base') || '../';

  var css = document.createElement('link');
  css.rel = 'stylesheet';
  css.href = base + 'practice-peer-nav.css';
  document.head.appendChild(css);

  var nav = document.createElement('nav');
  nav.className = 'practice-peer-nav';
  nav.setAttribute('aria-label', '其他練習專區');

  var title = document.createElement('p');
  title.className = 'practice-peer-nav__title';
  title.textContent = '其他練習專區';

  var list = document.createElement('ul');
  list.className = 'practice-peer-nav__list';

  PEERS.forEach(function (peer) {
    if (peer.key === current) return;
    var li = document.createElement('li');
    var a = document.createElement('a');
    a.href = /^https?:\/\//i.test(peer.path) ? peer.path : base + peer.path;
    if (/^https?:\/\//i.test(peer.path)) {
      a.target = '_blank';
      a.rel = 'noopener noreferrer';
    }
    a.textContent = peer.label;
    li.appendChild(a);
    list.appendChild(li);
  });

  if (!list.children.length) {
    mount.remove();
    return;
  }

  nav.appendChild(title);
  nav.appendChild(list);
  mount.replaceWith(nav);
})();
