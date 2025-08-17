
document.addEventListener('DOMContentLoaded',()=>{
  const flash=document.querySelector('.alert[data-autoclose]'); if(flash) setTimeout(()=>flash.remove(),4000);
  const rows=[...document.querySelectorAll('[data-price-row]')];
  const cs=document.querySelector('#filter-category'), ds=document.querySelector('#filter-duration'), q=document.querySelector('#filter-search');
  function apply(){const c=cs?cs.value:'', d=ds?ds.value:'', s=q?q.value.toLowerCase().trim():''; rows.forEach(r=>{const okc=!c||r.dataset.cat===c, okd=!d||r.dataset.dur===d, oks=!s||r.textContent.toLowerCase().includes(s); r.style.display=(okc&&okd&&oks)?'':'none';});}
  if(cs) cs.addEventListener('change',apply); if(ds) ds.addEventListener('change',apply); if(q) q.addEventListener('input',apply); apply();
});
