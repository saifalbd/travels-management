const browserIsDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && browserIsDark)) {
    document.body.classList.add('dark');

} else {
    document.body.classList.remove('dark')
}
document.getElementById('theme-toggle').addEventListener('click',()=>{
document.body.classList.toggle('dark')
})
