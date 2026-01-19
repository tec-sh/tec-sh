<?php
$app = $_GET['app'] ?? null;
$sub = $_GET['sub'] ?? null;

$app_url = null;
$old = null;
$app_beta = ['url' => null, 'version' => null, 'message' => 'Coming Soon'];
$app_old_url = null;
if ($app == 'sma') {
    $app_url = 'https://sma.tec.sh/admin';
    $old = ['url' => 'https://sma3.tec.sh/admin', 'version' => 'v3.5.5', 'message' => 'Old Version is
deprecated and no longer supported.', ];
    $app_beta = ['url' => 'https://sma4.tec.sh/admin', 'version' => 'v4.0.0-beta.x', 'message' => 'Beta
version is for testing purpose only.', ];
} elseif ($app == 'sma_shop') {
    $app_url = 'https://sma.tec.sh';
    $app_beta = ['url' => 'https://sma4.tec.sh',
        'version'      => 'v4.0.0-beta.x', 'message' => 'Beta version is for testing purpose
only.', ];
} elseif ($app == 'sma-saas') {
    $app_url = 'https://sma-saas.com';
} elseif ($app == 'sim') {
    $app_url = 'https://sim.tec.sh';
} elseif ($app == 'ssm') {
    $app_url = 'https://ssm.tec.sh';
} elseif ($app == 'mps') {
    $app_url = 'https://mps.tec.sh';
} elseif ($app == 'forum') {
    $app_url =
    'https://forum.tec.sh';
} elseif ($app == 'sbm') {
    $app_url =
    'https://sbm.tec.sh';
} elseif ($app == 'wims') {
    $app_url =
    'https://wims.tec.sh';
} elseif ($app == 'tsms') {
    $app_url =
    'https://tsms.tec.sh';
} elseif ($app == 'spos') {
    $app_url =
    'https://spos.tec.sh';
    $old = ['url' => 'https://spos4.tec.sh', 'version' => 'v4.1.1', 'message' => 'Old Version is deprecated and no longer supported.'];
    $app_beta = ['url' => 'https://spos5.tec.sh', 'version' => 'v5.0.0-rc.x',
        'message'      => 'You can use this version for production.', ];
} elseif ($app ==
'asin') {
    $app_url = 'https://asin.tec.sh';
} elseif ($app == 'sili') {
    $app_url
    = 'https://sili.tec.sh';
} elseif ($app == 'sarsa') {
    $app_url =
    'https://sarsa.tec.sh';
} elseif ($app == 'asukal') {
    $app_url =
    'https://asukal.tec.sh';
} elseif ($app == 'kampeon') {
    $app_url =
    'https://kampeon.tec.sh';
} if ($sub !== null) {
    if ($app_url) {
        $app_url =
        $app_url . '/' . $sub;
    }
} $items = [
    [
        'image' => '/assets/icons/mps.png',
        'name'  => 'Modern Point of Sale Solution (Web Version)', 'link' => 'https://tecdiary.net/products/modern-pos-solution-saas-version', 'description' => 'MPS is all in one retail & restaurant POS solution that offers tools to manage your business form single application. It has simple design & comes with comprehensive guide.',
    ],
    [
        'image'       => '/assets/icons/wims.png', 'name' => 'Warehouse Inventory Management Solution', 'link' => 'https://tecdiary.net/products/warehouse-inventory-management-solution-wims',
        'description' => 'WIMS is developed to provide easy solution for managing warehouse inventory/stock. It has the option to categorize the items, assign units & manage inventory for item variants.',
    ],
    [
        'image'       => '/assets/icons/tsms.png', 'name' => 'Tailor Shop Management System (Web
Version)', 'link'     => 'https://tecdiary.net/products/tailor-shop-management-system-tsms-web',
        'description' => 'Tailor Shop Management System is developer for small and medium sized tailoring business needs to manage customers, measurements, orders and payments.',
    ],
    [
        'image'                                => '/assets/icons/sbm.png', 'name' => 'Simple
Business Manager - Invoicing Solution', 'link' => 'https://tecdiary.net/products/simple-business-manager-invoicing-solution',
        'description'                          => 'SBM is all in one business solution that offers a lot features such as invoicing, recurring invoices, purchases, stock, CRM, Accounting and Payments to manage your business.',
    ],
    [
        'image'       => '/assets/icons/sma.png',
        'name'        => 'Stock Manager Advance with All Modules', 'link' => 'https://tecdiary.net/products/stock-manager-advance-with-all-modules',
        'description' => 'Stock Manager Advance with all module (Shop & POS) is a PHP/jQuery based web application that allows you to manage your sales and inventory from anywhere.',
    ],
    [
        'image'       => '/assets/icons/spos.png', 'name' => 'Simple POS - Point of Sale Made Easy', 'link' => 'https://tecdiary.net/products/simple-pos-point-of-sale-made-easy',
        'description' => 'Simple POS is PHP and jQuery based web application. This Point of Sale solution is suitable for small and medium businesses with simple and friendly user interface.',
    ],
    [
        'image'       => '/assets/icons/sim.png', 'name' => 'Simple Invoice Manager - Invoicing Made Easy', 'link' => 'https://tecdiary.net/products/simple-invoice-manager-invoicing-made-easy',
        'description' => 'Simple Invoice Manager is a php based web app to manage your invoices, payments, quotations &customers. It is responsive &open product based invoicing solution.',
    ],
    [
        'image'       => '/assets/icons/forum.png', 'name' => 'Simple Forum - Responsive Bulletin Board', 'link' => 'https://tecdiary.net/products/simple-forum-responsive-bulletin-board',
        'description' => 'Simple forum is the responsive bulletin board and community forum software that can be used to stay in touch with a group of people or can power your entire website.',
    ],
    [
        'image' => '/assets/icons/ssm.png', 'name' => 'Simple Stock Manager', 'link' => 'https://tecdiary.net/products/simple-stock-manager', 'description' => 'Simple Stock Manager is php based web application to manage your stock comes with multiple check-in/check-out items, Import by csv, Barcode/Label printing, Categories, Backups and Settings modules.',
    ],
]; ?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tec.sh</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
  </head>

  <body>
    <div class="bg-white">
      <main class="isolate">
        <!-- Demo Section -->
        <?php if ($app && $app_url) { ?>
        <section
          id="demo"
          class="grid min-h-screen place-items-center px-6 py-16 sm:py-24 lg:px-8"
        >
          <div class="text-center">
            <img src="/assets/tec.svg" alt="Tec.sh" class="w-20 mx-auto mb-8" />
            <p class="text-base font-semibold">We are trying to redirect to</p>
            <h1
              class="mt-4 text-3xl font-thin tracking-tight text-gray-900 sm:text-5xl"
            >
              <?= $app_url ? htmlspecialchars($app_url) : '' ?>
            </h1>

            <div id="iframe-warning" class="mt-6 text-base leading-7">
              <p class="text-red-600 font-bold">
                Sorry, Our demo can't be loaded in frame.
              </p>
              <p class="mt-1 text-gray-600">
                Please click the button below to open in parent frame or new
                tab.
              </p>
            </div>

            <div class="mt-10 flex flex-wrap items-center justify-center gap-6">
              <a
                target="_top"
                href="<?= $app_url ? htmlspecialchars($app_url) : '' ?>"
                class="rounded-md bg-green-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-green-500 focus-visible:outline-solid focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600"
                >Open Demo</a
              >
              <a
                target="_blank"
                href="<?= $app_url ? htmlspecialchars($app_url) : '' ?>"
                class="text-sm font-semibold text-gray-900 hover:bg-gray-100 rounded-md hover:-mx-3.5 hover:px-3.5 hover:py-2.5 transition-all"
                >Open Demo in New Tab <span aria-hidden="true">&rarr;</span>
              </a>
            </div>
            <?php if ($app_old_url) { ?>
            <div class="mt-16">
              <p class="text-base font-semibold">Deprecated Version</p>
              <div class="mt-6 flex items-center justify-center gap-x-6">
                <a
                  href="<?= $app_old_url ?>"
                  target="_top"
                  class="rounded-md bg-blue-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-blue-500 focus-visible:outline-solid focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                  >Open Demo</a
                >
                <a
                  target="_blank"
                  href="<?= $app_old_url ?>"
                  class="text-sm font-semibold text-gray-900 rounded-md hover:-mx-3.5 hover:px-3.5 hover:py-2.5 transition-all"
                  >Open Demo in New Tab <span aria-hidden="true">&rarr;</span>
                </a>
              </div>
            </div>
            <?php } ?>
            <?php if (isset($old['url'])) { ?>
            <div class="mt-16 bg-gray-950 rounded-2xl p-4 min-w-96 shadow-xl">
              <p class="text-base font-semibold text-gray-200">Old Version</p>
              <?php if (isset($old['version'])) { ?>
              <p class="mt-6 text-4xl font-thin text-blue-500 pb-0.5">
                <?= $old['version'] ?>
              </p>
              <?php if (isset($old['message'])) { ?>
              <p class="mt-2 text-sm text-white">
                <?= $old['message'] ?>
              </p>
              <?php } ?>
              <?php } ?>
              <div
                class="mt-6 -mx-4 px-4 pt-4 border-t border-gray-700 flex items-center justify-center gap-x-6"
              >
                <a
                  href="<?= $old['url'] ?>"
                  target="_top"
                  class="rounded-md bg-blue-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-blue-500 focus-visible:outline-solid focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                  >Open Demo</a
                >
                <a
                  target="_blank"
                  href="<?= $old['url'] ?>"
                  class="text-sm font-semibold text-gray-200 hover:bg-gray-800 rounded-md hover:-mx-3.5 hover:px-3.5 hover:py-2.5 transition-all"
                  >Open Demo in New Tab <span aria-hidden="true">&rarr;</span>
                </a>
              </div>
            </div>
            <?php } elseif (isset($app_beta['url'])) { ?>
            <div class="mt-16 bg-gray-950 rounded-2xl p-4 min-w-96 shadow-xl">
              <p class="text-base font-semibold text-gray-200">Next Version</p>
              <?php if (isset($app_beta['version'])) { ?>
              <p class="mt-6 text-4xl font-thin text-blue-500 pb-0.5">
                <?= $app_beta['version'] ?>
              </p>
              <?php if (isset($app_beta['message'])) { ?>
              <p class="mt-2 text-sm text-white">
                <?= $app_beta['message'] ?>
              </p>
              <?php } ?>
              <?php } ?>
              <div
                class="mt-6 -mx-4 px-4 pt-4 border-t border-gray-700 flex items-center justify-center gap-x-6"
              >
                <a
                  href="<?= $app_beta['url'] ?>"
                  target="_top"
                  class="rounded-md bg-blue-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-blue-500 focus-visible:outline-solid focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                  >Open Demo</a
                >
                <a
                  target="_blank"
                  href="<?= $app_beta['url'] ?>"
                  class="text-sm font-semibold text-gray-200 hover:bg-gray-800 rounded-md hover:-mx-3.5 hover:px-3.5 hover:py-2.5 transition-all"
                  >Open Demo in New Tab <span aria-hidden="true">&rarr;</span>
                </a>
              </div>
            </div>
            <?php } ?>
          </div>
        </section>
        <?php } ?>

        <!-- Hero section -->
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
                  class="ml-auto w-24 flex-none space-y-8 pt-32 sm:ml-0 lg:order-last lg:pt-36 xl:order-0 xl:pt-80"
                >
                  <div class="relative">
                    <img
                      src="/assets/icons/wims.png"
                      alt="Inventory Manager"
                      class="aspect-square w-full rounded-full bg-gray-900/5 object-cover shadow-lg"
                    />
                  </div>
                </div>
                <div class="mr-auto w-24 flex-none space-y-8 sm:mr-0 lg:pt-36">
                  <div class="relative">
                    <img
                      src="/assets/icons/sma.png"
                      alt="Stock Manager"
                      class="aspect-square w-full rounded-full bg-gray-900/5 object-cover shadow-lg"
                    />
                  </div>
                  <div class="relative">
                    <img
                      src="/assets/icons/sbm.png"
                      alt="Business Manager"
                      class="aspect-square w-full rounded-full bg-gray-900/5 object-cover shadow-lg"
                    />
                  </div>
                </div>
                <div class="w-24 flex-none space-y-8 pt-32 sm:pt-0">
                  <div class="relative">
                    <img
                      src="/assets/icons/tsms.png"
                      alt="Tailor Shop"
                      class="aspect-square w-full rounded-full bg-gray-900/5 object-cover shadow-lg"
                    />
                  </div>
                  <div class="relative">
                    <img
                      src="/assets/icons/forum.png"
                      alt="Simple Forum"
                      class="aspect-square w-full rounded-full bg-gray-900/5 object-cover shadow-lg"
                    />
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
              <?php foreach ($items as $item) { ?>
              <li class="relative flex items-start">
                <img src="<?= $item[
                'image'] ?>" alt="" class="w-16 h-16" />
                <div class="peer group flex-auto ml-6">
                  <h3 class="mb-2 font-semibold text-slate-900">
                    <a
                      class="before:absolute before:-inset-3 before:rounded-2xl sm:before:-inset-4"
                      href="<?= $item['link'] ?>"
                    >
                      <?= $item['name'] ?>
                      <svg
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
                        ></path>
                      </svg>
                    </a>
                  </h3>
                  <div class="prose prose-slate prose-sm text-slate-600">
                    <p class="text-justify">
                      <?= $item['description'] ?>
                    </p>
                  </div>
                </div>
              </li>
              <?php } ?>
            </ul>
          </section>
        </div>
      </main>

      <!-- Footer -->
      <footer
        class="mx-auto mt-40 max-w-6xl overflow-hidden px-6 pb-20 sm:pb-24 lg:px-8"
      >
        <p class="mt-10 text-center text-xs leading-5 text-gray-500">
          &copy;
          <?= date('Y') ?>
          Tec.sh All rights reserved.
        </p>
      </footer>
    </div>

    <script>
      if (window.self === window.top) {
        var warning = document.getElementById("iframe-warning");
        if (warning) {
          warning.style.display = "none";
        }
        <?php if ($app_url) { ?>
        window.location.replace( <?= json_encode($app_url) ?> );
        <?php } ?>
      }
    </script>
  </body>
</html>
