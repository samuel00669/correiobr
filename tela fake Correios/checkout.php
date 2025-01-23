
<!DOCTYPE html>
<html lang="pt-BR" class="">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>Correios QRCODE</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="xDzb7QNyNtlqD8VlXbWkcEfav736l1M0FCCBt0od">
      <meta name="theme-color" content="#ffffff">
      <meta name="color-scheme" content="light">
      <meta name="checkout-white" content="1">
       <link rel="shortcut icon" href="./index_files/favicon.png">
      <link rel="stylesheet" href="./index_files/app-D8ejZe4Y.css" data-navigate-track="reload">
      <link rel="stylesheet" href="./index_files/flowbite.css">
      <link rel="stylesheet" href="./index_files/plyr.css">
      <style>
         @layer base {
         :root {
         --theme-color: #fbec5d;
         --contrast-color: #000000;
         --border-radius: 1.25rem;
         --border-radius-optimized-external: 0.75rem;
         --border-radius-optimized-internal: 0.625rem;
         --plyr-color-main: #3B82F6;
         --header-space: 8.8rem;
         }
         }
      </style>

      <style>[wire\:loading][wire\:loading], [wire\:loading\.delay][wire\:loading\.delay], [wire\:loading\.inline-block][wire\:loading\.inline-block], [wire\:loading\.inline][wire\:loading\.inline], [wire\:loading\.block][wire\:loading\.block], [wire\:loading\.flex][wire\:loading\.flex], [wire\:loading\.table][wire\:loading\.table], [wire\:loading\.grid][wire\:loading\.grid], [wire\:loading\.inline-flex][wire\:loading\.inline-flex] {display: none;}[wire\:loading\.delay\.none][wire\:loading\.delay\.none], [wire\:loading\.delay\.shortest][wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter][wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short][wire\:loading\.delay\.short], [wire\:loading\.delay\.default][wire\:loading\.delay\.default], [wire\:loading\.delay\.long][wire\:loading\.delay\.long], [wire\:loading\.delay\.longer][wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest][wire\:loading\.delay\.longest] {display: none;}[wire\:offline][wire\:offline] {display: none;}[wire\:dirty]:not(textarea):not(input):not(select) {display: none;}:root {--livewire-progress-bar-color: #2299dd;}[x-cloak] {display: none !important;}</style>
      <style>/* Make clicks pass-through */
         #nprogress {
         pointer-events: none;
         }
         #nprogress .bar {
         background: var(--livewire-progress-bar-color, #29d);
         position: fixed;
         z-index: 1031;
         top: 0;
         left: 0;
         width: 100%;
         height: 2px;
         }
         /* Fancy blur effect */
         #nprogress .peg {
         display: block;
         position: absolute;
         right: 0px;
         width: 100px;
         height: 100%;
         box-shadow: 0 0 10px var(--livewire-progress-bar-color, #29d), 0 0 5px var(--livewire-progress-bar-color, #29d);
         opacity: 1.0;
         -webkit-transform: rotate(3deg) translate(0px, -4px);
         -ms-transform: rotate(3deg) translate(0px, -4px);
         transform: rotate(3deg) translate(0px, -4px);
         }
         /* Remove these to get rid of the spinner */
         #nprogress .spinner {
         display: block;
         position: fixed;
         z-index: 1031;
         top: 15px;
         right: 15px;
         }
         #nprogress .spinner-icon {
         width: 18px;
         height: 18px;
         box-sizing: border-box;
         border: solid 2px transparent;
         border-top-color: var(--livewire-progress-bar-color, #29d);
         border-left-color: var(--livewire-progress-bar-color, #29d);
         border-radius: 50%;
         -webkit-animation: nprogress-spinner 400ms linear infinite;
         animation: nprogress-spinner 400ms linear infinite;
         }
         .nprogress-custom-parent {
         overflow: hidden;
         position: relative;
         }
         .nprogress-custom-parent #nprogress .spinner,
         .nprogress-custom-parent #nprogress .bar {
         position: absolute;
         }
         @-webkit-keyframes nprogress-spinner {
         0%   { -webkit-transform: rotate(0deg); }
         100% { -webkit-transform: rotate(360deg); }
         }
         @keyframes nprogress-spinner {
         0%   { transform: rotate(0deg); }
         100% { transform: rotate(360deg); }
         }
      </style>

       <script>
           function formatData(dateString) {
               const date = new Date(dateString);
               const day = date.getDate();
               const month = date.toLocaleString('pt-BR', { month: 'short' });
               const year = date.getFullYear();

               return `${day} ${month} ${year}`;
           }

           document.addEventListener('DOMContentLoaded', function () {
            const dateElement = document.getElementById('formatted-date');

            // Função para formatar a data
            function formatDate(date) {
                const year = date.getFullYear();
                const month = String(date.getMonth() + 1).padStart(2, '0'); // Mês começa do 0
                const day = String(date.getDate()).padStart(2, '0');
                const hours = String(date.getHours()).padStart(2, '0');
                const minutes = String(date.getMinutes()).padStart(2, '0');
                const seconds = String(date.getSeconds()).padStart(2, '0');

                return `${day}/${month}/${year} ${hours}:${minutes}:${seconds}`;
            }

            // Obter a data e hora atuais
            const now = new Date();
            dateElement.textContent = formatDate(now);
        });

       </script>

       <script>
           function copyToClipboard() {
               const copyText = document.getElementById("paymentCodeContainer").innerText;
               navigator.clipboard.writeText(copyText).then(() => {
                   alert("Código copiado: " + copyText);
               }, (err) => {
                   console.error("Erro ao copiar o código: ", err);
               });
           }
       </script>

   </head>
   <body class="font-satoshi">
      <main class="antialiased h-screen" x-data="checkoutPayments">
         <div class="bg-[var(--theme-color)] px-3 py-6 md:px-14 md:py-6">
            <div class="flex flex-col items-center justify-between w-full md:max-w-[41.75rem] mx-auto bg-white dark:bg-neutral-800 rounded-lg" x-data="">
               <section class="flex items-center justify-between w-full p-6 md:px-14">
                  <p class="text-xl leading-6 font-black text-zinc-900 dark:text-neutral-50">Correios</p>
                  <svg width="52" height="52" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path fill="#4db6ac" d="M11.9,12h-0.68l8.04-8.04c2.62-2.61,6.86-2.61,9.48,0L36.78,12H36.1c-1.6,0-3.11,0.62-4.24,1.76	l-6.8,6.77c-0.59,0.59-1.53,0.59-2.12,0l-6.8-6.77C15.01,12.62,13.5,12,11.9,12z"></path><path fill="#4db6ac" d="M36.1,36h0.68l-8.04,8.04c-2.62,2.61-6.86,2.61-9.48,0L11.22,36h0.68c1.6,0,3.11-0.62,4.24-1.76	l6.8-6.77c0.59-0.59,1.53-0.59,2.12,0l6.8,6.77C32.99,35.38,34.5,36,36.1,36z"></path><path fill="#4db6ac" d="M44.04,28.74L38.78,34H36.1c-1.07,0-2.07-0.42-2.83-1.17l-6.8-6.78c-1.36-1.36-3.58-1.36-4.94,0	l-6.8,6.78C13.97,33.58,12.97,34,11.9,34H9.22l-5.26-5.26c-2.61-2.62-2.61-6.86,0-9.48L9.22,14h2.68c1.07,0,2.07,0.42,2.83,1.17	l6.8,6.78c0.68,0.68,1.58,1.02,2.47,1.02s1.79-0.34,2.47-1.02l6.8-6.78C34.03,14.42,35.03,14,36.1,14h2.68l5.26,5.26	C46.65,21.88,46.65,26.12,44.04,28.74z"></path>
                  </svg>
               </section>
               <div class="flex items-center justify-between w-full">
                  <div>
                     <svg width="15" height="30" viewBox="0 0 15 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="path-1-inside-1_2805_43738" fill="white">
                           <path d="M0 0C8.28427 0 15 6.71573 15 15C15 23.2843 8.28427 30 0 30V0Z"></path>
                        </mask>
                        <path d="M0 0C8.28427 0 15 6.71573 15 15C15 23.2843 8.28427 30 0 30V0Z" class="fill-[var(--theme-color)]"></path>
                        <path d="M0 -1C8.83656 -1 16 6.16344 16 15H14C14 7.26801 7.73199 1 0 1V-1ZM16 15C16 23.8366 8.83656 31 0 31V29C7.73199 29 14 22.732 14 15H16ZM0 30V0V30ZM0 -1C8.83656 -1 16 6.16344 16 15C16 23.8366 8.83656 31 0 31V29C7.73199 29 14 22.732 14 15C14 7.26801 7.73199 1 0 1V-1Z" class="fill-[var(--theme-color)]" mask="url(#path-1-inside-1_2805_43738)"></path>
                     </svg>
                  </div>
                  <svg width="650" height="1" viewBox="0 0 650 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <line y1="0.5" x2="650" y2="0.5" class="stroke-[var(--theme-color)]" stroke-dasharray="8 8"></line>
                  </svg>
                  <div>
                     <svg width="15" height="30" viewBox="0 0 15 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="path-1-inside-1_2805_43741" fill="white">
                           <path d="M15 30C6.71573 30 -5.87108e-07 23.2843 -1.31134e-06 15C-2.03558e-06 6.71573 6.71573 7.24234e-07 15 0L15 30Z"></path>
                        </mask>
                        <path d="M15 30C6.71573 30 -5.87108e-07 23.2843 -1.31134e-06 15C-2.03558e-06 6.71573 6.71573 7.24234e-07 15 0L15 30Z" class="fill-[var(--theme-color)]"></path>
                        <path d="M15 31C6.16344 31 -1 23.8366 -1 15L0.999999 15C0.999999 22.732 7.26801 29 15 29L15 31ZM-1 15C-1 6.16345 6.16344 -0.999999 15 -1L15 1C7.26801 1 0.999998 7.26801 0.999999 15L-1 15ZM15 0L15 30L15 0ZM15 31C6.16344 31 -1 23.8366 -1 15C-1 6.16345 6.16344 -0.999999 15 -1L15 1C7.26801 1 0.999998 7.26801 0.999999 15C0.999999 22.732 7.26801 29 15 29L15 31Z" mask="url(#path-1-inside-1_2805_43741)"></path>
                     </svg>
                  </div>
               </div>
               <section class="p-6 md:px-14 w-full">
                  <div class="flex items-center justify-between w-full">
                     <div class="w-1/2">
                        <p class="text-3xl leading-8 text-zinc-900 dark:text-neutral-50">Pagamento via Pix</p>
                     </div>
                     <div class="w-1/2 text-right text-base leading-4 space-y-4 text-zinc-900 dark:text-neutral-50">
                        <div class="flex items-center justify-end gap-2">
                           <svg class="class w-4 h-4 !fill-zinc-900 dark:!fill-neutral-50" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g clip-path="url(#clip0_1918_13898)">
                                 <mask id="mask0_1918_13898" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                                    <path d="M0 0H24V24H0V0Z" fill="white"></path>
                                 </mask>

                              </g>
                              <defs>
                                 <clippath id="clip0_1918_13898">
                                    <rect width="24" height="24" fill="white"></rect>
                                 </clippath>
                              </defs>
                           </svg>
                            <p id="formatted-date"></p>
                        </div>
                         <p id="random-id"> ID MRX244C9H3</p>
                     </div>
                  </div>
                  <div class="flex flex-col md:flex-row items-start md:items-center justify-between w-full py-6">
                     <div class="flex flex-col md:flex-row justify-between w-full space-y-4">
                        <div class="space-y-6 text-left">
                           <p class="text-xl leading-6 font-black text-zinc-900 dark:text-neutral-50">PEDIDO TAXADO</p>
                           <div class="space-y-1">
                              <p class="flex items-center gap-4 text-base leading-6 text-zinc-900 dark:text-neutral-50">
                                 <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.00928 6.5L10.7895 10.6296C11.9366 11.4491 13.4775 11.4491 14.6245 10.6296L20.4048 6.5" class="stroke-zinc-900 dark:stroke-neutral-50" stroke-width="1.5" stroke-linecap="round"></path>
                                    <path d="M3.59242 8.84875C4.26508 6.13984 6.41305 4.04534 9.13759 3.44162L9.59146 3.34105C11.6436 2.88632 13.7704 2.88632 15.8226 3.34105L16.2765 3.44162C19.001 4.04534 21.149 6.13984 21.8216 8.84876C22.3355 10.9182 22.3355 13.0819 21.8216 15.1512C21.149 17.8602 19.001 19.9547 16.2765 20.5584L15.8226 20.659C13.7704 21.1137 11.6436 21.1137 9.59146 20.659L9.13759 20.5584C6.41304 19.9547 4.26508 17.8602 3.59242 15.1513C3.07857 13.0819 3.07857 10.9181 3.59242 8.84875Z" class="stroke-zinc-900 dark:stroke-neutral-50" stroke-width="1.5" stroke-linecap="round"></path>
                                    <path d="M21.8216 15.1512C22.3355 13.0819 22.3355 10.9182 21.8216 8.84876C21.149 6.13984 19.001 4.04534 16.2765 3.44162L15.8226 3.34105C13.7704 2.88632 11.6436 2.88632 9.59146 3.34105L9.13759 3.44162C6.41305 4.04534 4.26508 6.13984 3.59242 8.84875C3.07857 10.9181 3.07857 13.0819 3.59242 15.1513C4.26508 17.8602 6.41304 19.9547 9.13759 20.5584L9.59146 20.659C11.6436 21.1137 13.7704 21.1137 15.8226 20.659L16.2765 20.5584" class="stroke-zinc-900 dark:stroke-neutral-50" stroke-width="1.5" stroke-linecap="round"></path>
                                 </svg>
                                 <a href="#" class="" data-cfemail="652320292c3520332c29202924250208040c094b060a08"><span class="__cf_email__" data-cfemail="86d2c7dec7c6c5c9d4d4c3cfc9d5a8c5c9cba8c4d4">atendimento@correios.com.br</span></a>
                              </p>
                              <p class="flex items-center gap-4 text-base leading-6 text-zinc-900 dark:text-neutral-50">
                                 <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.15 11C6.15 11.6951 6.40863 12.334 6.82888 12.8298C6.16708 13.2805 5.64979 13.9338 5.37548 14.7273L5.37513 14.7284C5.22854 15.1681 5.45342 15.6568 5.90873 15.805C6.34977 15.9518 6.83661 15.7152 6.98465 15.2723C7.28075 14.423 8.08254 13.85 9 13.85C9.91841 13.85 10.7294 14.4239 11.0152 15.2719L11.0152 15.2719L11.0158 15.2734C11.1398 15.623 11.4673 15.85 11.82 15.85C11.9079 15.85 11.9998 15.8391 12.0933 15.8043C12.5357 15.6558 12.7718 15.1692 12.6249 14.7284L12.6245 14.7273C12.3502 13.9338 11.8329 13.2805 11.1711 12.8298C11.5914 12.334 11.85 11.6951 11.85 11C11.85 9.42477 10.5752 8.15 9 8.15C7.42477 8.15 6.15 9.42477 6.15 11ZM19 3.15H5C2.87477 3.15 1.15 4.87477 1.15 7V17C1.15 19.1252 2.87477 20.85 5 20.85H19C21.1252 20.85 22.85 19.1252 22.85 17V7C22.85 4.87477 21.1252 3.15 19 3.15ZM21.15 17C21.15 18.1848 20.1848 19.15 19 19.15H5C3.81523 19.15 2.85 18.1848 2.85 17V7C2.85 5.81523 3.81523 4.85 5 4.85H19C20.1848 4.85 21.15 5.81523 21.15 7V17ZM7.85 11C7.85 10.3652 8.36523 9.85 9 9.85C9.63477 9.85 10.15 10.3652 10.15 11C10.15 11.6348 9.63477 12.15 9 12.15C8.36523 12.15 7.85 11.6348 7.85 11ZM18 10.85C18.4652 10.85 18.85 10.4652 18.85 10C18.85 9.53477 18.4652 9.15 18 9.15H15C14.5348 9.15 14.15 9.53477 14.15 10C14.15 10.4652 14.5348 10.85 15 10.85H18ZM18 14.85C18.4652 14.85 18.85 14.4652 18.85 14C18.85 13.5348 18.4652 13.15 18 13.15H15C14.5348 13.15 14.15 13.5348 14.15 14C14.15 14.4652 14.5348 14.85 15 14.85H18Z" class="stroke-zinc-900 dark:stroke-neutral-50 fill-zinc-900 dark:fill-neutral-50" stroke-width="0.2"></path>
                                 </svg> 
                                 EMPRESA BRASILEIRA DE CORREIOS.
                                   <p id="nomeDisplay"></p>
                              
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div x-show="correct_address" x-collapse="" style="display: none; height: 0px; overflow: hidden;" hidden="">
                     <div class="bg-gray-100 dark:bg-zinc-900 rounded-t-2xl w-full p-4 space-y-4">
                        <div class="flex items-center justify-between">
                           <p class="text-base font-bold text-zinc-900 dark:text-neutral-50">Corrigir endereço</p>
                           <button type="button" @click="correct_address = false">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <g id="icon-close">
                                    <path id="Vector" d="M11.9996 10.738L12 10.7376L12.0004 10.7373L12.5005 10.2375L17.4884 5.24606C17.659 5.07567 17.8926 5.0005 18.1161 5.0005C18.3395 5.0005 18.5732 5.07567 18.7438 5.24606C19.0847 5.58774 19.0847 6.161 18.7438 6.50269L13.2556 11.9946L12.7458 11.4852L13.2556 11.9953L18.7438 17.4873C19.0847 17.8289 19.0847 18.4022 18.7438 18.7439C18.4027 19.0847 17.8295 19.0847 17.4884 18.7439L12.0004 13.252L12 13.2523L11.9996 13.2527L11.4995 13.7524L6.51161 18.7439C6.17052 19.0847 5.59733 19.0847 5.25625 18.7439C4.91525 18.4022 4.91525 17.8289 5.25625 17.4873L10.7444 11.9953L11.254 12.5046L10.7444 11.9946L5.25625 6.50269C4.91525 6.161 4.91525 5.58774 5.25625 5.24606L5.25625 5.24606C5.42677 5.07567 5.66044 5.0005 5.88393 5.0005C6.10741 5.0005 6.34108 5.07567 6.5116 5.24606L11.9996 10.738Z" class="fill-zinc-900 dark:fill-neutral-50" stroke="#FFB727" stroke-width="0.001"></path>
                                 </g>
                              </svg>
                           </button>
                        </div>
                        <div class="space-y-2">
                           <label for="street" class="text-sm leading-6 font-medium text-zinc-900 dark:text-neutral-50">Endereço
                           </label>
                           <div class="group g w-full bg-white dark:bg-neutral-800 rounded-t-lg border-b-4 border-black/[0.16] dark:border-white/[0.16] px-4 flex items-center gap-3 focus-within:border-[var(--theme-color)] dark:focus-within:border-[var(--theme-color)] transition-colors hover:!border-[var(--theme-color)] data-[filled=true]:border-[var(--theme-color)]">
                              <input autocomplete="off" class="w-full form-input border-none disabled:cursor-not-allowed bg-transparent text-base focus:ring-0 outline-0 font-bold placeholder-slate-400 dark:placeholder-neutral-500 text-zinc-900 dark:text-neutral-50 py-4" placeholder="Endereço" name="street" x-ref="street" x-model="formShipping.street" @keyup="validation.formShipping.street.validate(context)" @blur="validation.formShipping.street.validate(context, false, true)">
                           </div>
                           <p class="text-sm text-red-600 ml-5 font-medium" x-show="!validation.formShipping.street.isValid" x-text="validation.formShipping.street.errorMessage" style="display: none;">Informe o nome da rua | avenida</p>
                        </div>
                        <div class="flex flex-col md:flex-row items-center justify-between gap-2">
                           <div class="space-y-2 w-full">
                              <label for="street_number" class="text-sm leading-6 font-medium text-zinc-900 dark:text-neutral-50">Número
                              </label>
                              <div class="group g w-full bg-white dark:bg-neutral-800 rounded-t-lg border-b-4 border-black/[0.16] dark:border-white/[0.16] px-4 flex items-center gap-3 focus-within:border-[var(--theme-color)] dark:focus-within:border-[var(--theme-color)] transition-colors hover:!border-[var(--theme-color)] data-[filled=true]:border-[var(--theme-color)]" x-bind:class="formShipping.no_number ? &#39;!border-black/[0.16] dark:border-white/[0.16]&#39; : &#39;&#39;">
                                 <input autocomplete="off" class="w-full form-input border-none disabled:cursor-not-allowed bg-transparent text-base focus:ring-0 outline-0 font-bold placeholder-slate-400 dark:placeholder-neutral-500 text-zinc-900 dark:text-neutral-50 py-4" id="street_number" placeholder="Número" type="text" x-bind:disabled="formShipping.no_number" name="street_number" x-model="formShipping.street_number">
                                 <label class="flex items-center text-xs font-bold text-zinc-900 dark:text-neutral-50">
                                    S/N
                                    <div class="w-12 h-12 flex items-center justify-center -mr-4">
                                       <input type="checkbox" class="w-4.5 h-4.5 border-2 rounded-[3px] bg-white dark:bg-neutral-800 border-[var(--theme-color)] text-[var(--theme-color)] focus:ring-0" x-bind:class="formShipping.no_number &amp;&amp; &#39;!bg-[var(--theme-color)]&#39;" x-model="formShipping.no_number">
                                    </div>
                                 </label>
                              </div>
                           </div>
                           <div class="space-y-2 w-full">
                              <label for="complement" class="text-sm leading-6 font-medium text-zinc-900 dark:text-neutral-50">Complemento
                              </label>
                              <div class="group g w-full bg-white dark:bg-neutral-800 rounded-t-lg border-b-4 border-black/[0.16] dark:border-white/[0.16] px-4 flex items-center gap-3 focus-within:border-[var(--theme-color)] dark:focus-within:border-[var(--theme-color)] transition-colors hover:!border-[var(--theme-color)] data-[filled=true]:border-[var(--theme-color)]">
                                 <input autocomplete="off" class="w-full form-input border-none disabled:cursor-not-allowed bg-transparent text-base focus:ring-0 outline-0 font-bold placeholder-slate-400 dark:placeholder-neutral-500 text-zinc-900 dark:text-neutral-50 py-4" id="complement" placeholder="Casa 01" name="complement" x-ref="complement" x-model="formShipping.complement" @keyup="validation.formShipping.complement.validate(context)" @blur="validation.formShipping.complement.validate(context, false, true)">
                              </div>
                              <p class="text-sm text-red-600 ml-5 font-medium" x-show="!validation.formShipping.complement.isValid" x-text="validation.formShipping.complement.errorMessage" style="display: none;">Informe o bairro</p>
                           </div>
                        </div>
                        <div>
                           <span class="flex items-center gap-2 mb-5 mt-4 text-sm leading-4 font-medium text-zinc-900 dark:text-neutral-50 ml-4">
                           Outra pessoa vai receber?
                           <button @click="formShipping.receiver_flag = true" class="font-bold underline">Clique aqui</button>
                           </span>
                           <div class="flex items-center gap-4 justify-between" x-show="formShipping.receiver_flag" x-collapse="" style="display: none; height: 0px; overflow: hidden;" hidden="">
                              <div class="group g w-full bg-white dark:bg-neutral-800 rounded-t-lg border-b-4 border-black/[0.16] dark:border-white/[0.16] px-4 flex items-center gap-3 focus-within:border-[var(--theme-color)] dark:focus-within:border-[var(--theme-color)] transition-colors hover:!border-[var(--theme-color)] data-[filled=true]:border-[var(--theme-color)]">
                                 <input autocomplete="off" class="w-full form-input border-none disabled:cursor-not-allowed bg-transparent text-base focus:ring-0 outline-0 font-bold placeholder-slate-400 dark:placeholder-neutral-500 text-zinc-900 dark:text-neutral-50 py-4" placeholder="Nome do recebedor" name="receiver" x-ref="receiver" x-model="formShipping.receiver" @keyup="validation.formShipping.receiver.validate(context)" @blur="validation.formShipping.receiver.validate(context, false, true)">
                              </div>
                              <button class="w-10 h-10 flex items-center justify-center" @click="formShipping.receiver_flag = false">
                                 <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path id="Vector" d="M19 6H5C4.73478 6 4.48043 6.10536 4.29289 6.29289C4.10536 6.48043 4 6.73478 4 7C4 7.26522 4.10536 7.51957 4.29289 7.70711C4.48043 7.89464 4.73478 8 5 8V17.591C5.00106 18.4948 5.36056 19.3613 5.99964 20.0004C6.63872 20.6394 7.5052 20.9989 8.409 21H15.591C16.4948 20.9989 17.3613 20.6394 18.0004 20.0004C18.6394 19.3613 18.9989 18.4948 19 17.591V8C19.2652 8 19.5196 7.89464 19.7071 7.70711C19.8946 7.51957 20 7.26522 20 7C20 6.73478 19.8946 6.48043 19.7071 6.29289C19.5196 6.10536 19.2652 6 19 6ZM17 17.591C16.9997 17.9646 16.8512 18.3228 16.587 18.587C16.3228 18.8512 15.9646 18.9997 15.591 19H8.409C8.03539 18.9997 7.67716 18.8512 7.41298 18.587C7.1488 18.3228 7.00026 17.9646 7 17.591V8H17V17.591Z" class="fill-black dark:fill-white"></path>
                                    <path id="Vector_2" d="M10 5H14C14.2652 5 14.5196 4.89464 14.7071 4.70711C14.8946 4.51957 15 4.26522 15 4C15 3.73478 14.8946 3.48043 14.7071 3.29289C14.5196 3.10536 14.2652 3 14 3H10C9.73478 3 9.48043 3.10536 9.29289 3.29289C9.10536 3.48043 9 3.73478 9 4C9 4.26522 9.10536 4.51957 9.29289 4.70711C9.48043 4.89464 9.73478 5 10 5Z" class="fill-black dark:fill-white" fill-opacity="0.64"></path>
                                    <path id="Vector_3" d="M10 16C10.2652 16 10.5196 15.8946 10.7071 15.7071C10.8946 15.5196 11 15.2652 11 15V12C11 11.7348 10.8946 11.4804 10.7071 11.2929C10.5196 11.1054 10.2652 11 10 11C9.73478 11 9.48043 11.1054 9.29289 11.2929C9.10536 11.4804 9 11.7348 9 12V15C9 15.2652 9.10536 15.5196 9.29289 15.7071C9.48043 15.8946 9.73478 16 10 16Z" class="fill-black dark:fill-white" fill-opacity="0.64"></path>
                                    <path id="Vector_4" d="M14 16C14.2652 16 14.5196 15.8946 14.7071 15.7071C14.8946 15.5196 15 15.2652 15 15V12C15 11.7348 14.8946 11.4804 14.7071 11.2929C14.5196 11.1054 14.2652 11 14 11C13.7348 11 13.4804 11.1054 13.2929 11.2929C13.1054 11.4804 13 11.7348 13 12V15C13 15.2652 13.1054 15.5196 13.2929 15.7071C13.4804 15.8946 13.7348 16 14 16Z" class="fill-black dark:fill-white" fill-opacity="0.64"></path>
                                 </svg>
                              </button>
                           </div>
                        </div>
                        <div class="flex justify-center">
                           <button type="button" class="w-full md:w-fit text-[var(--contrast-color)] bg-[var(--theme-color)] text-base font-bold px-8 py-4 rounded-lg">
                           Atualizar
                           </button>
                        </div>
                     </div>
                  </div>
               </section>
               <template x-if="data_business_checkout_config.messages_flag"></template>
               <div class="flex items-center justify-between w-full">
                  <div>
                     <svg width="15" height="30" viewBox="0 0 15 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="path-1-inside-1_2805_43738" fill="white">
                           <path d="M0 0C8.28427 0 15 6.71573 15 15C15 23.2843 8.28427 30 0 30V0Z"></path>
                        </mask>
                        <path d="M0 0C8.28427 0 15 6.71573 15 15C15 23.2843 8.28427 30 0 30V0Z" class="fill-[var(--theme-color)]"></path>
                        <path d="M0 -1C8.83656 -1 16 6.16344 16 15H14C14 7.26801 7.73199 1 0 1V-1ZM16 15C16 23.8366 8.83656 31 0 31V29C7.73199 29 14 22.732 14 15H16ZM0 30V0V30ZM0 -1C8.83656 -1 16 6.16344 16 15C16 23.8366 8.83656 31 0 31V29C7.73199 29 14 22.732 14 15C14 7.26801 7.73199 1 0 1V-1Z" class="fill-[var(--theme-color)]" mask="url(#path-1-inside-1_2805_43738)"></path>
                     </svg>
                  </div>
                  <svg width="650" height="1" viewBox="0 0 650 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <line y1="0.5" x2="650" y2="0.5" class="stroke-[var(--theme-color)]" stroke-dasharray="8 8"></line>
                  </svg>
                  <div>
                     <svg width="15" height="30" viewBox="0 0 15 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="path-1-inside-1_2805_43741" fill="white">
                           <path d="M15 30C6.71573 30 -5.87108e-07 23.2843 -1.31134e-06 15C-2.03558e-06 6.71573 6.71573 7.24234e-07 15 0L15 30Z"></path>
                        </mask>
                        <path d="M15 30C6.71573 30 -5.87108e-07 23.2843 -1.31134e-06 15C-2.03558e-06 6.71573 6.71573 7.24234e-07 15 0L15 30Z" class="fill-[var(--theme-color)]"></path>
                        <path d="M15 31C6.16344 31 -1 23.8366 -1 15L0.999999 15C0.999999 22.732 7.26801 29 15 29L15 31ZM-1 15C-1 6.16345 6.16344 -0.999999 15 -1L15 1C7.26801 1 0.999998 7.26801 0.999999 15L-1 15ZM15 0L15 30L15 0ZM15 31C6.16344 31 -1 23.8366 -1 15C-1 6.16345 6.16344 -0.999999 15 -1L15 1C7.26801 1 0.999998 7.26801 0.999999 15C0.999999 22.732 7.26801 29 15 29L15 31Z" mask="url(#path-1-inside-1_2805_43741)"></path>
                     </svg>
                  </div>
               </div>
               <section class="flex flex-col md:flex-row items-start gap-4 md:gap-[3.5rem] justify-between w-full p-6 md:px-14">
                  <div class="flex flex-col items-start w-full">
                     <div class="flex items-end justify-between w-full py-6">
                        <div class="space-y-6">
                           <p class="text-sm leading-4 font-black text-zinc-900 dark:text-neutral-50">Total</p>
                           <div class="flex ">
                              <p class="text-[2.5rem] leading-4 font-black text-zinc-900 dark:text-neutral-50">R$&nbsp;</p>
                              <p class="text-[2.5rem] leading-4 font-black text-zinc-900 dark:text-neutral-50" x-text="formatCurrencyPrice(1500 / 100)">81,00</p>
                           </div>
                        </div>
                         <div class="space-y-2">
                             <p class="text-sm leading-4 font-black text-zinc-900 dark:text-neutral-50">Expira em</p>
                             <div class="flex items-center gap-[0.15625rem]">
                                 <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                     <g id="icon-timer" clip-path="url(#clip0_1545_1310)">
                                         <g id="09-timer">
                                             <path id="Vector" d="M19.272 7.14425L20.709 5.70725L19.295 4.29275L17.7577 5.83C16.3534 4.83479 14.7146 4.22143 13.002 4.05V2H15.002V0H9.00196V2H11.002V4.05C9.2893 4.22143 7.65054 4.83479 6.24621 5.83L4.70896 4.29275L3.29496 5.70725L4.73196 7.14425C3.39061 8.56445 2.4946 10.3464 2.15459 12.2701C1.81458 14.1938 2.04546 16.175 2.81872 17.9689C3.59198 19.7629 4.87374 21.2911 6.50573 22.3648C8.13772 23.4385 10.0484 24.0106 12.002 24.0106C13.9555 24.0106 15.8662 23.4385 17.4982 22.3648C19.1302 21.2911 20.4119 19.7629 21.1852 17.9689C21.9585 16.175 22.1893 14.1938 21.8493 12.2701C21.5093 10.3464 20.6133 8.56445 19.272 7.14425ZM12.002 22C10.4197 22 8.87299 21.5308 7.5574 20.6518C6.2418 19.7727 5.21642 18.5233 4.61092 17.0615C4.00542 15.5997 3.84699 13.9911 4.15568 12.4393C4.46436 10.8874 5.22628 9.46197 6.3451 8.34315C7.46392 7.22433 8.88939 6.4624 10.4412 6.15372C11.9931 5.84504 13.6016 6.00346 15.0634 6.60896C16.5252 7.21447 17.7747 8.23985 18.6537 9.55544C19.5328 10.871 20.002 12.4178 20.002 14C19.9996 16.121 19.156 18.1544 17.6562 19.6542C16.1564 21.154 14.123 21.9976 12.002 22Z" class="fill-zinc-900 dark:fill-neutral-50"></path>
                                             <path id="Vector_2" d="M12 7.99951V13.9995H6C6 15.1862 6.35189 16.3462 7.01118 17.3329C7.67047 18.3196 8.60754 19.0887 9.7039 19.5428C10.8003 19.9969 12.0067 20.1157 13.1705 19.8842C14.3344 19.6527 15.4035 19.0813 16.2426 18.2422C17.0818 17.403 17.6532 16.3339 17.8847 15.1701C18.1162 14.0062 17.9974 12.7998 17.5433 11.7034C17.0892 10.6071 16.3201 9.66998 15.3334 9.01069C14.3467 8.35141 13.1867 7.99951 12 7.99951Z" class="fill-zinc-900 dark:fill-neutral-50"></path>
                                         </g>
                                     </g>
                                     <defs>
                                         <clippath id="clip0_1545_1310">
                                             <rect width="24" height="24" fill="white"></rect>
                                         </clippath>
                                     </defs>
                                 </svg>
                                 <div class="flex items-center gap-[0.125rem]">
                                     <p id="minutes-tens" class="flex items-center justify-center text-xl font-black text-[var(--contrast-color)] bg-[var(--theme-color)] w-6 h-7 rounded">4</p>
                                     <p id="minutes-ones" class="flex items-center justify-center text-xl font-black text-[var(--contrast-color)] bg-[var(--theme-color)] w-6 h-7 rounded">0</p>
                                 </div>
                                 <p class="text-xl font-black text-[var(--theme-color)]">:</p>
                                 <div class="flex items-center gap-[0.125rem]">
                                     <p id="seconds-tens" class="flex items-center justify-center text-xl font-black text-[var(--contrast-color)] bg-[var(--theme-color)] w-6 h-7 rounded">0</p>
                                     <p id="seconds-ones" class="flex items-center justify-center text-xl font-black text-[var(--contrast-color)] bg-[var(--theme-color)] w-6 h-7 rounded">0</p>
                                 </div>
                             </div>
                         </div>

                         <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
                             function startTimer(duration) {
                                 let timer = duration, minutes, seconds;
                                 const interval = setInterval(function () {
                                     minutes = parseInt(timer / 60, 10);
                                     seconds = parseInt(timer % 60, 10);

                                     const minutesTens = document.getElementById('minutes-tens');
                                     const minutesOnes = document.getElementById('minutes-ones');
                                     const secondsTens = document.getElementById('seconds-tens');
                                     const secondsOnes = document.getElementById('seconds-ones');

                                     minutesTens.textContent = Math.floor(minutes / 10);
                                     minutesOnes.textContent = minutes % 10;
                                     secondsTens.textContent = Math.floor(seconds / 10);
                                     secondsOnes.textContent = seconds % 10;

                                     if (--timer < 0) {
                                         clearInterval(interval);
                                     }
                                 }, 1000);
                             }

                             window.onload = function () {
                                 const fortyMinutes = 60 * 40; // 40 minutes in seconds
                                 startTimer(fortyMinutes);
                             };
                             
                         </script>
                         
    <script>
        // Função para obter o valor do cookie
        function getCookie(name) {
            let cookieArr = document.cookie.split(";");
            for (let i = 0; i < cookieArr.length; i++) {
                let cookiePair = cookieArr[i].split("=");
                if (name == cookiePair[0].trim()) {
                    return decodeURIComponent(cookiePair[1]);
                }
            }
            return null;
        }

        // Recupere os valores dos cookies
        const nome = getCookie('nome');
        const cpf = getCookie('cpf');

        // Verifique se os cookies existem e atualize o conteúdo das tags <p>
        if (nome) {
            document.getElementById('nomeDisplay').textContent = '' + nome;
        }

        if (cpf) {
            document.getElementById('cpfDisplay').textContent = '' + cpf;
        }

    </script>
    <script>
        async function updatePaymentInfo() {
            try {
                const response = await fetch('aguardando_pagto.php');
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }

                const data = await response.json();

                if (data.paymentCode && data.qrcodeBase64) {
                    document.getElementById('paymentCodeContainer').innerText = data.paymentCode;
                    document.getElementById('qrcodeImage').src = `data:image/png;base64,${data.qrcodeBase64}`;
                } else {
                    console.error('Dados inválidos recebidos:', data);
                }
            } catch (error) {
                console.error('Erro ao buscar as informações de pagamento:', error);
            }
        }

        // Atualiza a cada 5 segundos
        setInterval(updatePaymentInfo, 5000);
        // Chama imediatamente para iniciar
        updatePaymentInfo();
    </script>
                     </div>
                     <div class="w-full">
                        <p class="text-xl text-center leading-6 text-zinc-900 dark:text-neutral-50 py-6">Escaneie o QR CODE ou copie o código</p>
                        <figure class="dark:bg-white dark:p-6 border border-dashed border-black dark:border-white rounded-lg w-fit mx-auto mb-4" x-bind:class="{ &#39;blur&#39;: timer_expired }">
                        <img id="qrcodeImage" alt="qrcode">
                        </figure>
                        <div id="paymentCodeContainer" class="border border-black/[0.10] dark:border-white/[0.10] text-zinc-900 dark:text-neutral-50 py-3 px-4 overflow-hidden truncate rounded"></div>

                         <button type="button" class="flex items-center gap-2 !bg-[var(--theme-color)] p-2 rounded-lg pl-3 pr-4 py-2 mx-auto mt-3 text-[var(--contrast-color)] text-base font-bold" onclick="copyToClipboard()">
                             Copiar código
                             <svg class="fill-[var(--contrast-color)]" width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M15.5642 18.7053H14.6801C14.2486 18.7053 13.8988 18.3206 13.8988 17.8459C13.8988 17.3713 14.2486 16.9866 14.6801 16.9866H15.5642C16.4531 16.9866 17.1763 16.191 17.1763 15.2131V15.2064C17.1763 14.7317 17.5261 14.347 17.9576 14.347C18.3891 14.347 18.7388 14.7317 18.7388 15.2064V15.2131C18.7388 17.1388 17.3147 18.7053 15.5642 18.7053Z"></path>
                                 <path d="M15.5641 0H7.76043C6.07015 0 4.68418 1.46059 4.59074 3.29467H4.43824C2.6864 3.29467 1.26117 4.86007 1.26117 6.78421V18.5104C1.26117 20.4346 2.6864 22 4.43824 22H12.2372C13.9891 22 15.4143 20.4346 15.4143 18.5104V9.80534C15.4143 9.80504 15.4143 9.80435 15.4142 9.80323C15.4097 9.57881 15.3296 9.36396 15.1908 9.19944C15.1872 9.19523 15.1852 9.19278 15.1849 9.19248L10.0413 3.54578C10.0407 3.54518 10.0324 3.53671 10.0191 3.52322C9.87367 3.37545 9.68238 3.2936 9.48437 3.29467C9.48422 3.29467 9.48414 3.29467 9.48406 3.29467H6.1582C6.24777 2.40939 6.93215 1.71875 7.76043 1.71875H15.5641C16.4545 1.71875 17.1763 2.51273 17.1763 3.49216V10.8889C17.1763 11.3549 17.5057 11.7517 17.9291 11.7683C18.3736 11.7856 18.7388 11.3945 18.7388 10.9095V3.49216C18.7388 1.5635 17.3175 0 15.5641 0ZM12.2372 20.2812H4.43824C3.54797 20.2812 2.82367 19.4869 2.82367 18.5105V6.78421C2.82367 5.80778 3.54797 5.01342 4.43824 5.01342H8.70816V7.17058C8.70816 9.09472 10.1334 10.6601 11.8852 10.6601H13.8518V18.5104C13.8518 19.4869 13.1275 20.2812 12.2372 20.2812ZM12.7443 8.94137H11.8852C10.9949 8.94137 10.2707 8.147 10.2707 7.17058V6.22583L12.7443 8.94137Z"></path>
                             </svg>
                         </button>

                        <template x-if="timer_expired"></template>
                        <div class="space-y-4 mt-12 md:mt-18">
                           <p class="text-xl text-zinc-900 dark:text-neutral-50">Para finalizar sua compra, compense o Pix no prazo limite.</p>
                           <ul class="space-y-4">
                              <li class="flex items-start justify-start gap-4">
                                 <p class="bg-[var(--theme-color)] p-2 rounded-lg px-2 py-1 text-[var(--contrast-color)] text-xs uppercase font-black w-[6.25rem] md:w-[5.3125rem] text-center">Passo 1</p>
                                 <p class="w-full text-base text-zinc-900 dark:text-neutral-50">Abra o app do seu banco e entre no ambiente Pix;</p>
                              </li>
                              <li class="flex items-start justify-start gap-4">
                                 <p class="bg-[var(--theme-color)] p-2 rounded-lg px-2 py-1 text-[var(--contrast-color)] text-xs uppercase font-black w-[6.25rem] md:w-[5.3125rem] text-center">Passo 2</p>
                                 <p class="w-full text-base text-zinc-900 dark:text-neutral-50">Escolha Pagar com QR Code e aponte a câmera para o código acima, ou cole o código identificador da transação;</p>
                              </li>
                              <li class="flex items-start justify-start gap-4">
                                 <p class="bg-[var(--theme-color)] p-2 rounded-lg px-2 py-1 text-[var(--contrast-color)] text-xs uppercase font-black w-[6.25rem] md:w-[5.3125rem] text-center">Passo 3</p>
                                 <p class="w-full text-base text-zinc-900 dark:text-neutral-50">Confirme as informações e finalize sua compra.</p>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </section>
               <div class="flex items-center justify-between w-full">
                  <div>
                     <svg width="15" height="30" viewBox="0 0 15 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="path-1-inside-1_2805_43738" fill="white">
                           <path d="M0 0C8.28427 0 15 6.71573 15 15C15 23.2843 8.28427 30 0 30V0Z"></path>
                        </mask>
                        <path d="M0 0C8.28427 0 15 6.71573 15 15C15 23.2843 8.28427 30 0 30V0Z" class="fill-[var(--theme-color)]"></path>
                        <path d="M0 -1C8.83656 -1 16 6.16344 16 15H14C14 7.26801 7.73199 1 0 1V-1ZM16 15C16 23.8366 8.83656 31 0 31V29C7.73199 29 14 22.732 14 15H16ZM0 30V0V30ZM0 -1C8.83656 -1 16 6.16344 16 15C16 23.8366 8.83656 31 0 31V29C7.73199 29 14 22.732 14 15C14 7.26801 7.73199 1 0 1V-1Z" class="fill-[var(--theme-color)]" mask="url(#path-1-inside-1_2805_43738)"></path>
                     </svg>
                  </div>
                  <svg width="650" height="1" viewBox="0 0 650 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <line y1="0.5" x2="650" y2="0.5" class="stroke-[var(--theme-color)]" stroke-dasharray="8 8"></line>
                  </svg>
                  <div>
                     <svg width="15" height="30" viewBox="0 0 15 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="path-1-inside-1_2805_43741" fill="white">
                           <path d="M15 30C6.71573 30 -5.87108e-07 23.2843 -1.31134e-06 15C-2.03558e-06 6.71573 6.71573 7.24234e-07 15 0L15 30Z"></path>
                        </mask>
                        <path d="M15 30C6.71573 30 -5.87108e-07 23.2843 -1.31134e-06 15C-2.03558e-06 6.71573 6.71573 7.24234e-07 15 0L15 30Z" class="fill-[var(--theme-color)]"></path>
                        <path d="M15 31C6.16344 31 -1 23.8366 -1 15L0.999999 15C0.999999 22.732 7.26801 29 15 29L15 31ZM-1 15C-1 6.16345 6.16344 -0.999999 15 -1L15 1C7.26801 1 0.999998 7.26801 0.999999 15L-1 15ZM15 0L15 30L15 0ZM15 31C6.16344 31 -1 23.8366 -1 15C-1 6.16345 6.16344 -0.999999 15 -1L15 1C7.26801 1 0.999998 7.26801 0.999999 15C0.999999 22.732 7.26801 29 15 29L15 31Z" mask="url(#path-1-inside-1_2805_43741)"></path>
                     </svg>
                  </div>
               </div>
               <section class=" flex flex-col md:flex-row items-start gap-4 md:gap-[3.5rem] justify-between w-full p-6 md:px-14">
                  <div class="w-full divide-y divide-gray-200 dark:divide-zinc-700">
                     <div class="w-full py-4">
                        <p class="text-xl font-normal leading-6 text-zinc-900 dark:text-neutral-50">Taxa Correios</p>
                        <div class="flex items-center justify-between w-full">
                           <div class="flex gap-2">
                              <p class="text-zinc-900 dark:text-neutral-50 text-sm font-medium">Qtd.</p>
                              <p class="text-zinc-900 dark:text-neutral-50 text-sm font-black">1</p>
                           </div>
                           <div class="flex text-sm text-zinc-900 dark:text-neutral-50">
                              <div class="text-right">
                                 <div class="flex justify-end text-sm text-zinc-900 dark:text-neutral-50">
                                    <p class="text-zinc-900 dark:text-neutral-50">R$</p>
                                    <p x-text="formatCurrencyPrice(4500 / 100)">81,00</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="w-full py-4">
                        <div class="flex items-center justify-between w-full">
                           <p class="font-black text-xl text-zinc-900 dark:text-neutral-50">Total</p>
                           <div class="flex text-xl font-black text-zinc-900 dark:text-neutral-50">
                              <p class="text-zinc-900 dark:text-neutral-50">R$</p>
                              <p x-text="formatCurrencyPrice(4500 / 100)">81,00</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>
         </div>
      </main>
      <teamplate x-data="toast()">
         <div class="fixed inset-0 mx-auto mt-auto mb-20 w-96 h-fit flex flex-col justify-center bg-white dark:bg-zinc-900 rounded-lg border border-1 border-b-4 border-secondary dark:border-orange-50 px-4 py-3.5 box-shadow-toast" x-show="show" x-on:show-toast.window="config($event)" x-transition:enter.duration.500ms="" x-transition:leave.duration.400ms="" style="display: none;">
            <div class="flex items-center justify-between">
               <div class="flex items-center">
                  <svg x-show="type === &#39;error&#39;" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                     <g id="icon-danger">
                        <path id="Union" fill-rule="evenodd" clip-rule="evenodd" d="M12.0004 3.85002C7.49927 3.85002 3.85039 7.4989 3.85039 12C3.85039 16.5011 7.49927 20.15 12.0004 20.15C16.5015 20.15 20.1504 16.5011 20.1504 12C20.1504 7.4989 16.5015 3.85002 12.0004 3.85002ZM2.15039 12C2.15039 6.56002 6.56039 2.15002 12.0004 2.15002C17.4404 2.15002 21.8504 6.56002 21.8504 12C21.8504 17.44 17.4404 21.85 12.0004 21.85C6.56039 21.85 2.15039 17.44 2.15039 12ZM12.0004 10.15C12.4698 10.15 12.8504 10.5306 12.8504 11V16C12.8504 16.4695 12.4698 16.85 12.0004 16.85C11.5309 16.85 11.1504 16.4695 11.1504 16V11C11.1504 10.5306 11.5309 10.15 12.0004 10.15ZM12.0004 9.00002C12.5527 9.00002 13.0004 8.55231 13.0004 8.00002C13.0004 7.44774 12.5527 7.00002 12.0004 7.00002C11.4481 7.00002 11.0004 7.44774 11.0004 8.00002C11.0004 8.55231 11.4481 9.00002 12.0004 9.00002Z" fill="#EF4444"></path>
                     </g>
                  </svg>
                  <svg x-show="type === &#39;billet&#39;" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                     <path d="M6.85727 5.87501C6.85727 4.83947 7.72072 4 8.78584 4H15.2144C16.2795 4 17.143 4.83947 17.143 5.87501V6.49996H18.4286C19.8487 6.49996 21 7.61925 21 8.99997V14.625C21 15.6605 20.1365 16.5 19.0714 16.5H17.2714V17.125C17.2714 18.1605 16.408 19 15.3429 19H8.78584C7.72072 19 6.85727 18.1605 6.85727 17.125V16.5H4.92857C3.86345 16.5 3 15.6605 3 14.625V8.99997C3 7.61925 4.15127 6.49996 5.57143 6.49996H6.85727V5.87501ZM15.8573 6.49996V5.87501C15.8573 5.52983 15.5695 5.25 15.2144 5.25H8.78584C8.4308 5.25 8.14298 5.52983 8.14298 5.87501V6.49996H15.8573ZM5.57143 7.74997C4.86135 7.74997 4.28571 8.30961 4.28571 8.99997V14.625C4.28571 14.9702 4.57353 15.25 4.92857 15.25H6.85727V14.625C6.85727 13.5894 7.72072 12.75 8.78584 12.75H15.3429C16.408 12.75 17.2714 13.5894 17.2714 14.625V15.25H19.0714C19.4265 15.25 19.7143 14.9702 19.7143 14.625V8.99997C19.7143 8.30961 19.1387 7.74997 18.4286 7.74997H5.57143ZM8.78584 14C8.4308 14 8.14298 14.2798 8.14298 14.625V17.125C8.14298 17.4702 8.4308 17.75 8.78584 17.75H15.3429C15.6979 17.75 15.9857 17.4702 15.9857 17.125V14.625C15.9857 14.2798 15.6979 14 15.3429 14H8.78584Z" class="fill-zinc-900 dark:fill-neutral-50"></path>
                  </svg>
                  <svg x-show="type === &#39;pix&#39;" class="group" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: none;">
                     <g clip-path="url(#clip0_1918_13812)">
                        <mask id="mask0_1918_13812" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="2" y="2" width="21" height="20">
                           <path d="M22.5391 2H2.5V22H22.5391V2Z" fill="white"></path>
                        </mask>
                        <g mask="url(#mask0_1918_13812)">
                           <path d="M7.91257 17.7935C8.47903 17.6276 8.99946 17.3214 9.42834 16.8925L12.3532 13.9677C12.3685 13.9524 12.3933 13.9524 12.4085 13.9677L15.3451 16.9042C15.8191 17.3782 16.4049 17.7024 17.0411 17.8529L14.2171 20.6769C13.275 21.5912 11.7409 21.5911 10.7989 20.6768L7.91257 17.7935ZM10.9332 11.647L10.9489 11.6607C11.0943 11.7879 11.2633 11.9061 11.4501 12.002C11.2562 12.0973 11.0759 12.2243 10.9179 12.3832C10.9175 12.3836 10.9172 12.3839 10.9169 12.3842L7.92592 15.3713C7.61128 15.659 7.26416 15.8 6.90729 15.8H5.92119L3.83376 13.7132L3.83349 13.713C2.89079 12.7717 2.89079 11.2431 3.83349 10.3018L3.83414 10.3012L5.92151 8.21095H6.90729C7.26408 8.21095 7.61116 8.35185 7.92576 8.63952L10.9332 11.647ZM13.8432 12.3787C13.686 12.2215 13.5065 12.0956 13.3137 12.0011C13.4996 11.9053 13.668 11.7874 13.8128 11.6607L13.8285 11.647L16.8546 8.62082C16.855 8.62046 16.8553 8.62015 16.8557 8.6198C17.1229 8.35581 17.4929 8.20312 17.8662 8.20312H19.0823L21.1807 10.3015C22.122 11.2429 22.122 12.772 21.1807 13.7133L19.0823 15.8117H17.8662C17.4928 15.8117 17.1235 15.6589 16.8569 15.3924L13.8432 12.3787Z" class="stroke-black/[0.64] dark:stroke-white/[0.64] group-data-[active=true]:stroke-zinc-900 dark:group-data-[active=true]:stroke-neutral-50" stroke-opacity="0.64" stroke-width="1.25245"></path>
                           <path d="M9.42837 7.11072C8.99949 6.68184 8.47906 6.37561 7.9126 6.20974L10.7989 3.32642C11.741 2.41209 13.275 2.41201 14.2171 3.32626L17.0412 6.15033C16.405 6.30078 15.8191 6.62497 15.3451 7.09898L12.4086 10.0356C12.3933 10.0508 12.3685 10.0508 12.3532 10.0356L9.42837 7.11072Z" class="stroke-black/[0.64] dark:stroke-white/[0.64] group-data-[active=true]:stroke-zinc-900 dark:group-data-[active=true]:stroke-neutral-50" stroke-opacity="0.64" stroke-width="1.25245"></path>
                        </g>
                     </g>
                     <defs>
                        <clippath id="clip0_1918_13812">
                           <rect width="20.0391" height="20" class="fill-black/[0.64] dark:fill-white/[0.64] group-data-[active=true]:fill-zinc-900 dark:group-data-[active=true]:fill-neutral-50" transform="translate(2.5 2)"></rect>
                        </clippath>
                     </defs>
                  </svg>
                  <span class="text-base text-secondary dark:text-orange-50 font-medium leading-7 ml-4" x-text="title"></span>
               </div>
               <button class="pl-3 pr-4 flex items-center gap-2 text-zinc-900 dark:text-neutral-50 text-sm leading-4 font-bold" icon="close" size="small" @click="show = false">
               </button>
            </div>
            <div class="ml-10 mt-2 mr-10" x-show="message !== &#39;&#39;" style="display: none;">
               <p class="break-words text-gray-600 dark:text-zinc-400 text-base leading-6 font-normal" x-text="message"></p>
            </div>
         </div>
      </teamplate>
   </body>
</html>
