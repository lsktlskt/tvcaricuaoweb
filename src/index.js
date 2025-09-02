export default {
  async fetch(request, env, ctx) {
    // Si la ruta es la raíz, devuelve el index.html
    const url = new URL(request.url);
    if (url.pathname === '/') {
      return new Response(await env.ASSETS.fetch(request), {
        headers: { 'Content-Type': 'text/html' },
      });
    }

    // Para otros archivos (CSS, JS, imágenes), sirve desde los assets
    return env.ASSETS.fetch(request);
  },
};