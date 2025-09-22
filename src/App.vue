<script setup>
import { defineComponent, h, ref, onMounted } from "vue";

const app = ref(null);
const app_url = ref(null);
const app_beta = ref({ url: null, version: null, message: "Coming Soon" });
const is_parent = ref(false);
const app_old_url = ref(null);

onMounted(() => {
  let urlParams = new URLSearchParams(window.location.search);
  app.value = urlParams.get("app");

  if (app.value == "sma") {
    app_url.value = "https://sma.tec.sh/admin";
    app_beta.value = {
      url: "https://sma4.tec.sh/admin",
      version: "v4.0.0-beta.x",
      message: "Beta version is for testing purpose only.",
    };
  } else if (app.value == "sma_shop") {
    app_url.value = "https://sma.tec.sh";
    app_beta.value = {
      url: "https://sma4.tec.sh",
      version: "v4.0.0-beta.x",
      message: "Beta version is for testing purpose only.",
    };
  } else if (app.value == "sim") {
    app_url.value = "https://sim.tec.sh";
    // app_old_url.value = "https://sim3.tec.sh";
  } else if (app.value == "ssm") {
    app_url.value = "https://ssm.tec.sh";
    // app_old_url.value = "https://ssm3.tec.sh";
  } else if (app.value == "mps") {
    app_url.value = "https://mps.tec.sh";
  } else if (app.value == "forum") {
    app_url.value = "https://forum.tec.sh";
  } else if (app.value == "sbm") {
    app_url.value = "https://sbm.tec.sh";
  } else if (app.value == "wims") {
    app_url.value = "https://wims.tec.sh";
  } else if (app.value == "tsms") {
    app_url.value = "https://tsms.tec.sh";
  } else if (app.value == "spos") {
    app_url.value = "https://spos.tec.sh";
    app_beta.value = {
      url: "https://spos5.tec.sh",
      version: "v5.0.0-rc.x",
      message: "You can use this version for production.",
    };
  } else if (app.value == "asin") {
    app_url.value = "https://asin.tec.sh";
  } else if (app.value == "sili") {
    app_url.value = "https://sili.tec.sh";
  } else if (app.value == "sarsa") {
    app_url.value = "https://sarsa.tec.sh";
  } else if (app.value == "asukal") {
    app_url.value = "https://asukal.tec.sh";
  } else if (app.value == "kampeon") {
    app_url.value = "https://kampeon.tec.sh";
  }

  if (urlParams.has("sub")) {
    app_url.value = app_url.value + "/" + urlParams.get("sub");
  }

  if (window.self === window.top) {
    is_parent.value = true;
    if (app_url.value) {
      // window.location.replace(app_url.value);
    }
  }
});

const items = [
  {
    image: "/icons/mps.png",
    name: "Modern Point of Sale Solution (Web Version)",
    link: "https://tecdiary.net/products/modern-pos-solution-saas-version",
    description:
      "MPS is all in one retail & restaurant POS solution that offers tools to manage your business form single application. It has simple design & comes with comprehensive guide.",
  },
  {
    image: "/icons/wims.png",
    name: "Warehouse Inventory Management Solution",
    link: "https://tecdiary.net/products/warehouse-inventory-management-solution-wims",
    description:
      "WIMS is developed to provide easy solution for managing warehouse inventory/stock. It has the option to categorize the items, assign units & manage inventory for item variants.",
  },
  {
    image: "/icons/tsms.png",
    name: "Tailor Shop Management System (Web Version)",
    link: "https://tecdiary.net/products/tailor-shop-management-system-tsms-web",
    description:
      "Tailor Shop Management System is developer for small and medium sized tailoring business needs to manage customers, measurements, orders and payments.",
  },
  {
    image: "/icons/sbm.png",
    name: "Simple Business Manager - Invoicing Solution",
    link: "https://tecdiary.net/products/simple-business-manager-invoicing-solution",
    description:
      "SBM is all in one business solution that offers a lot features such as invoicing, recurring invoices, purchases, stock, CRM, Accounting and Payments to manage your business.",
  },
  {
    image: "/icons/sma.png",
    name: "Stock Manager Advance with All Modules",
    link: "https://tecdiary.net/products/stock-manager-advance-with-all-modules",
    description:
      "Stock Manager Advance with all module (Shop & POS) is a PHP/jQuery based web application that allows you to manage your sales and inventory from anywhere.",
  },
  {
    image: "/icons/spos.png",
    name: "Simple POS - Point of Sale Made Easy",
    link: "https://tecdiary.net/products/simple-pos-point-of-sale-made-easy",
    description:
      "Simple POS is PHP and jQuery based web application. This Point of Sale solution is suitable for small and medium businesses with simple and friendly user interface.",
  },
  {
    image: "/icons/sim.png",
    name: "Simple Invoice Manager - Invoicing Made Easy",
    link: "https://tecdiary.net/products/simple-invoice-manager-invoicing-made-easy",
    description:
      "Simple Invoice Manager is a php based web app to manage your invoices, payments, quotations &customers. It is responsive &open product based invoicing solution.",
  },
  {
    image: "/icons/forum.png",
    name: "Simple Forum - Responsive Bulletin Board",
    link: "https://tecdiary.net/products/simple-forum-responsive-bulletin-board",
    description:
      "Simple forum is the responsive bulletin board and community forum software that can be used to stay in touch with a group of people or can power your entire website.",
  },
  {
    image: "/icons/ssm.png",
    name: "Simple Stock Manager",
    link: "https://tecdiary.net/products/simple-stock-manager",
    description:
      "Simple Stock Manager is php based web application to manage your stock comes with multiple check-in/check-out items, Import by csv, Barcode/Label printing, Categories, Backups and Settings modules.",
  },
];
</script>

<template>
  <div class="bg-white">
    <main class="isolate">
      <!-- Demo Section -->
      <section
        id="demo"
        v-if="app"
        class="grid min-h-screen place-items-center px-6 py-16 sm:py-24 lg:px-8"
      >
        <div class="text-center">
          <img src="/tec.svg" alt="Tec.sh" class="w-20 mx-auto mb-8" />
          <p class="text-base font-semibold">We are trying to redirect to</p>
          <h1
            class="mt-4 text-3xl font-thin tracking-tight text-gray-900 sm:text-5xl"
          >
            {{ app_url }}
          </h1>

          <div v-if="!is_parent" class="mt-6 text-base leading-7">
            <p class="text-red-600 font-bold">
              Sorry, Our demo can't be loaded in frame.
            </p>
            <p class="mt-1 text-gray-600">
              Please click the button below to open in parent frame or new tab.
            </p>
          </div>

          <div class="mt-10 flex flex-wrap items-center justify-center gap-6">
            <a
              target="_top"
              :href="app_url"
              class="rounded-md bg-green-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600"
              >Open Demo</a
            >
            <a
              target="_blank"
              :href="app_url"
              class="text-sm font-semibold text-gray-900 hover:bg-gray-100 rounded-md hover:px-3.5 hover:py-2.5 transition-all"
              >Open Demo in New Tab <span aria-hidden="true">&rarr;</span></a
            >
          </div>
          <div v-if="app_old_url" class="mt-16">
            <p class="text-base font-semibold">Deprecated Version</p>
            <div class="mt-6 flex items-center justify-center gap-x-6">
              <a
                :href="app_old_url"
                target="_top"
                class="rounded-md bg-blue-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                >Open Demo</a
              >
              <a
                target="_blank"
                :href="app_old_url"
                class="text-sm font-semibold text-gray-900 rounded-md hover:px-3.5 hover:py-2.5 transition-all"
                >Open Demo in New Tab <span aria-hidden="true">&rarr;</span></a
              >
            </div>
          </div>
          <div
            v-if="app_beta.url"
            class="mt-16 bg-gray-950 rounded-2xl p-4 min-w-96 shadow-xl"
          >
            <p class="text-base font-semibold text-gray-200">Next Version</p>
            <template v-if="app_beta.version">
              <p class="mt-6 text-4xl font-thin text-blue-500 pb-0.5">
                {{ app_beta.version }}
              </p>
              <!-- <p class="text-sm text-blue-500">Coming Soon</p> -->
              <p v-if="app_beta.message" class="mt-2 text-sm text-white">
                {{ app_beta.message }}
              </p>
            </template>
            <div
              class="mt-6 -mx-4 px-4 pt-4 border-t border-gray-700 flex items-center justify-center gap-x-6"
            >
              <a
                :href="app_beta.url"
                target="_top"
                class="rounded-md bg-blue-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                >Open Demo</a
              >
              <a
                target="_blank"
                :href="app_beta.url"
                class="text-sm font-semibold text-gray-200 hover:bg-gray-800 rounded-md hover:px-3.5 hover:py-2.5 transition-all"
                >Open Demo in New Tab <span aria-hidden="true">&rarr;</span></a
              >
            </div>
          </div>
        </div>
      </section>

      <!-- Hero section -->
      <div class="relative isolate -z-10">
        <svg
          class="absolute inset-x-0 top-0 -z-10 h-[64rem] w-full stroke-gray-200 [mask-image:radial-gradient(32rem_32rem_at_center,white,transparent)]"
          aria-hidden="true"
        >
          <defs>
            <pattern
              id="1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84"
              width="200"
              height="200"
              x="50%"
              y="-1"
              patternUnits="userSpaceOnUse"
            >
              <path d="M.5 200V.5H200" fill="none" />
            </pattern>
          </defs>
          <svg x="50%" y="-1" class="overflow-visible fill-gray-50">
            <path
              d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z"
              stroke-width="0"
            />
          </svg>
          <rect
            width="100%"
            height="100%"
            stroke-width="0"
            fill="url(#1f932ae7-37de-4c0a-a8b0-a6e3b4d44b84)"
          />
        </svg>
        <div
          class="absolute left-1/2 right-0 top-0 -z-10 -ml-24 transform-gpu overflow-hidden blur-3xl lg:ml-24 xl:ml-48"
          aria-hidden="true"
        >
          <div
            class="aspect-[801/1036] w-[50.0625rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30"
            style="
              clip-path: polygon(
                63.1% 29.5%,
                100% 17.1%,
                76.6% 3%,
                48.4% 0%,
                44.6% 4.7%,
                54.5% 25.3%,
                59.8% 49%,
                55.2% 57.8%,
                44.4% 57.2%,
                27.8% 47.9%,
                35.1% 81.5%,
                0% 97.7%,
                39.2% 100%,
                35.2% 81.4%,
                97.2% 52.8%,
                63.1% 29.5%
              );
            "
          />
        </div>
        <div class="overflow-hidden">
          <div class="mx-auto max-w-6xl px-6 lg:px-8">
            <div
              class="mx-auto max-w-2xl gap-x-14 lg:mx-0 lg:flex lg:max-w-none lg:items-center lg:justify-between min-h-screen py-32"
            >
              <div class="w-full max-w-xl lg:shrink-0 xl:max-w-2xl">
                <h1
                  class="text-4xl font-bold tracking-tight text-gray-900 lg:text-6xl"
                >
                  Ready to see our software in action?
                </h1>
                <p
                  class="relative mt-6 text-lg leading-8 text-gray-600 lg:max-w-none"
                >
                  Simply click on the demo links below to launch the live demo.
                  If you have any questions or feedback, feel free to reach out
                  to our team. We're here to assist you and ensure you have all
                  the information you need to make an informed decision.
                </p>
              </div>
              <div
                class="mt-14 flex justify-end gap-8 sm:justify-start sm:pl-24 lg:mt-0 lg:pl-0"
              >
                <div
                  class="ml-auto w-24 flex-none space-y-8 pt-32 sm:ml-0 lg:order-last lg:pt-36 xl:order-none xl:pt-80"
                >
                  <div class="relative">
                    <img
                      src="/icons/wims.png"
                      alt="Inventory Manager"
                      class="aspect-[1/1] w-full rounded-full bg-gray-900/5 object-cover shadow-lg"
                    />
                    <!-- <div
                      class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"
                    /> -->
                  </div>
                </div>
                <div class="mr-auto w-24 flex-none space-y-8 sm:mr-0 lg:pt-36">
                  <div class="relative">
                    <img
                      src="/icons/sma.png"
                      alt="Stock Manager"
                      class="aspect-[1/1] w-full rounded-full bg-gray-900/5 object-cover shadow-lg"
                    />
                    <!-- <div
                      class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"
                    /> -->
                  </div>
                  <div class="relative">
                    <img
                      src="/icons/sbm.png"
                      alt="Business Manager"
                      class="aspect-[1/1] w-full rounded-full bg-gray-900/5 object-cover shadow-lg"
                    />
                    <!-- <div
                      class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"
                    /> -->
                  </div>
                </div>
                <div class="w-24 flex-none space-y-8 pt-32 sm:pt-0">
                  <div class="relative">
                    <img
                      src="/icons/tsms.png"
                      alt="Tailor Shop"
                      class="aspect-[1/1] w-full rounded-full bg-gray-900/5 object-cover shadow-lg"
                    />
                    <!-- <div
                      class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"
                    /> -->
                  </div>
                  <div class="relative">
                    <img
                      src="/icons/forum.png"
                      alt="Simple Forum"
                      class="aspect-[1/1] w-full rounded-full bg-gray-900/5 object-cover shadow-lg"
                    />
                    <!-- <div
                      class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-gray-900/10"
                    /> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Other items section -->
      <div class="mx-auto mt-32 max-w-6xl px-6 sm:mt-40 lg:px-8">
        <section class="relative">
          <h2 class="text-slate-900 text-xl tracking-tight font-bold mb-3">
            Demos Links
          </h2>
          <div class="mb-10 max-w-3xl prose prose-slate xl:mb-0">
            <p>
              Whether you're looking to streamline operations, enhance
              engagement, or optimize resources, our solutions are designed to
              meet your business needs.
            </p>
          </div>
          <ul
            class="mt-10 grid grid-cols-1 gap-x-16 gap-y-8 xl:grid-cols-2 xl:gap-y-10"
          >
            <li v-for="item of items" class="relative flex items-start">
              <img :src="item.image" alt="" class="w-16 h-16" />
              <!-- <div
                class="w-16 h-16 p-[0.1875rem] rounded-full ring-1 ring-slate-900/10 shadow overflow-hidden flex-none"
              >
                <div
                  class="aspect-w-1 aspect-h-1 bg-[length:100%]"
                  :style="`background-image: url(&quot;${item.image}&quot;)`"
                ></div>
              </div> -->
              <div class="peer group flex-auto ml-6">
                <h3 class="mb-2 font-semibold text-slate-900">
                  <a
                    class="before:absolute before:-inset-3 before:rounded-2xl sm:before:-inset-4"
                    :href="item.link"
                    >{{ item.name
                    }}<svg
                      viewBox="0 0 3 6"
                      class="ml-3 w-auto h-1.5 overflow-visible inline -mt-px text-slate-400 opacity-0 group-hover:opacity-100 group-focus-within:opacity-100"
                    >
                      <path
                        d="M0 0L3 3L0 6"
                        fill="none"
                        stroke-width="2"
                        stroke="currentColor"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                      ></path></svg
                  ></a>
                </h3>
                <div class="prose prose-slate prose-sm text-slate-600">
                  <p class="text-justify">{{ item.description }}</p>
                </div>
              </div>
            </li>
          </ul>
        </section>
      </div>
    </main>

    <!-- Footer -->
    <footer
      class="mx-auto mt-40 max-w-6xl overflow-hidden px-6 pb-20 sm:pb-24 lg:px-8"
    >
      <!-- <nav
        class="-mb-6 columns-2 sm:flex sm:justify-center sm:space-x-12"
        aria-label="Footer"
      >
        <div
          v-for="item in footerNavigation.main"
          :key="item.name"
          class="pb-6"
        >
          <a
            :href="item.href"
            class="text-sm leading-6 text-gray-600 hover:text-gray-900"
            >{{ item.name }}</a
          >
        </div>
      </nav> -->
      <!-- <div class="mt-10 flex justify-center space-x-10">
        <a
          v-for="item in footerNavigation.social"
          :key="item.name"
          :href="item.href"
          class="text-gray-400 hover:text-gray-500"
        >
          <span class="sr-only">{{ item.name }}</span>
          <component :is="item.icon" class="h-6 w-6" aria-hidden="true" />
        </a>
      </div> -->
      <p class="mt-10 text-center text-xs leading-5 text-gray-500">
        &copy; {{ new Date().getFullYear() }} Tec.sh All rights reserved.
      </p>
    </footer>
  </div>
</template>
