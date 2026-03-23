(function () {
  "use strict";
  const ALLOWED_DOMAINS = ["*.test", "*.tecd.top", "*.tecdesk.top"];
  const RESET_HOURS = [1, 7, 13, 19];

  function getPurchaseLink() {
    const scriptTag = document.querySelector('script[src*="demo-reset"]');
    return scriptTag &&
      scriptTag.dataset.purchaseLink &&
      (scriptTag.dataset.purchaseLink.startsWith("https://tecdiary.com") ||
        scriptTag.dataset.purchaseLink.startsWith("https://codecanyon.net"))
      ? scriptTag.dataset.purchaseLink
      : null;
  }

  function isDomainAllowed() {
    if (ALLOWED_DOMAINS.length === 0) {
      return true;
    }
    const currentHost = window.location.hostname;
    return ALLOWED_DOMAINS.some((domain) => {
      if (domain.startsWith("*.")) {
        const baseDomain = domain.substring(2);
        return (
          currentHost === baseDomain || currentHost.endsWith("." + baseDomain)
        );
      }

      return currentHost === domain;
    });
  }

  function createResetBanner() {
    const banner = document.createElement("div");
    banner.id = "demo-reset-banner";
    banner.style.cssText =
      "position: fixed;bottom: 10px;left: 50%;transform: translateX(-50%);background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);color: white;padding: 6px 10px;border-radius: 8px;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;font-size: 13px;font-weight: 500;box-shadow: 0 2px 12px rgba(0, 0, 0, 0.2);z-index: 9999;display: flex;align-items: center;gap: 8px;";

    const resetContainer = document.createElement("div");
    resetContainer.style.cssText =
      "display: flex;align-items: center;gap: 4px;cursor: default;position: relative;";

    const resetIcon = document.createElement("span");
    resetIcon.innerHTML =
      '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" style="width:16px;height:16px;"><path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25ZM12.75 6a.75.75 0 0 0-1.5 0v6c0 .414.336.75.75.75h4.5a.75.75 0 0 0 0-1.5h-3.75V6Z" clip-rule="evenodd" /></svg>';
    resetIcon.style.fontSize = "16px";

    const timerText = document.createElement("span");
    timerText.id = "reset-message";
    timerText.style.cssText = "font-weight: 600;";

    const tooltip = document.createElement("div");
    tooltip.id = "reset-tooltip";
    tooltip.style.cssText =
      "position: absolute;bottom: calc(100% + 8px);left: 50%;transform: translateX(-50%);background: rgba(0,0,0,0.9);color: white;padding: 6px 10px;border-radius: 6px;font-size: 12px;white-space: nowrap;opacity: 0;pointer-events: none;transition: opacity 0.2s;";

    resetContainer.appendChild(resetIcon);
    resetContainer.appendChild(timerText);
    resetContainer.appendChild(tooltip);
    banner.appendChild(resetContainer);

    resetContainer.addEventListener("mouseenter", () => {
      tooltip.style.opacity = "1";
    });
    resetContainer.addEventListener("mouseleave", () => {
      tooltip.style.opacity = "0";
    });

    const purchaseLink = getPurchaseLink();
    if (purchaseLink) {
      const separator = document.createElement("div");
      separator.style.cssText =
        "width: 1px;height: 20px;background: rgba(255,255,255,0.3);";
      banner.appendChild(separator);

      const cartContainer = document.createElement("div");
      cartContainer.style.cssText = "position: relative;";

      const cartLink = document.createElement("a");
      cartLink.href = purchaseLink;
      cartLink.target = "_blank";
      cartLink.rel = "noopener noreferrer";
      cartLink.style.cssText =
        "color: white;text-decoration: none;display: flex;align-items: center;cursor: pointer;";
      cartLink.innerHTML =
        '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" style="width:20px;height:20px;"><path d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" /></svg>';
      cartLink.style.fontSize = "18px";

      const cartTooltip = document.createElement("div");
      cartTooltip.style.cssText =
        "position: absolute;bottom: calc(100% + 8px);left: 50%;transform: translateX(-50%);background: rgba(0,0,0,0.9);color: white;padding: 6px 10px;border-radius: 6px;font-size: 12px;white-space: nowrap;opacity: 0;pointer-events: none;transition: opacity 0.2s;";
      cartTooltip.textContent = "Buy Now";

      cartContainer.appendChild(cartLink);
      cartContainer.appendChild(cartTooltip);
      banner.appendChild(cartContainer);

      cartContainer.addEventListener("mouseenter", () => {
        cartTooltip.style.opacity = "1";
      });
      cartContainer.addEventListener("mouseleave", () => {
        cartTooltip.style.opacity = "0";
      });
    }

    return banner;
  }

  function getTimeUntilReset() {
    const now = new Date();
    const currentHour = now.getHours();
    const nextHour = RESET_HOURS.find((h) => h > currentHour);
    const nextReset = new Date(now);
    if (nextHour !== undefined) {
      nextReset.setHours(nextHour, 0, 0, 0);
    } else {
      nextReset.setDate(nextReset.getDate() + 1);
      nextReset.setHours(RESET_HOURS[0], 0, 0, 0);
    }
    const diff = nextReset - now;
    const totalSeconds = Math.floor(diff / 1000);
    const hours = Math.floor(totalSeconds / 3600);
    const minutes = Math.ceil((totalSeconds % 3600) / 60);
    return { hours, minutes, totalSeconds };
  }

  function formatTimeMessage(hours, minutes) {
    if (hours > 0) {
      return {
        compact: `${hours}h ${minutes}m`,
        full: `Data will reset in ${hours} ${hours === 1 ? "hour" : "hours"} ${minutes} ${minutes === 1 ? "minute" : "minutes"}`,
      };
    }
    return {
      compact: `${minutes}m`,
      full: `Data will reset in ${minutes} ${minutes === 1 ? "minute" : "minutes"}`,
    };
  }

  function updateTimer() {
    const messageElement = document.getElementById("reset-message");
    const tooltipElement = document.getElementById("reset-tooltip");
    if (!messageElement) return;
    const { hours, minutes, totalSeconds } = getTimeUntilReset();
    if (totalSeconds <= 0) {
      messageElement.textContent = "Resetting...";
      if (tooltipElement) tooltipElement.textContent = "Resetting demo now...";
      setTimeout(() => {
        window.location.reload();
      }, 15000);
      return;
    }
    const message = formatTimeMessage(hours, minutes);
    messageElement.textContent = message.compact;
    if (tooltipElement) tooltipElement.textContent = message.full;
  }

  function init() {
    if (!isDomainAllowed()) {
      console.log(
        "Demo reset banner: Domain not in allowed list, skipping initialization",
      );
      return;
    }
    if (document.readyState === "loading") {
      document.addEventListener("DOMContentLoaded", init);
      return;
    }
    const banner = createResetBanner();
    document.body.appendChild(banner);
    updateTimer();
    setInterval(updateTimer, 15000);
  }

  init();
})();
