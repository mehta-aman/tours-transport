@props(['enabled' => true])

@if($enabled && config('app.debug'))
<div id="performance-monitor" style="position: fixed; top: 10px; right: 10px; background: rgba(0,0,0,0.8); color: white; padding: 10px; border-radius: 5px; font-family: monospace; font-size: 12px; z-index: 9999; display: none;">
    <div><strong>Performance Monitor</strong></div>
    <div id="load-time">Load Time: <span id="load-time-value">-</span>ms</div>
    <div id="fcp">FCP: <span id="fcp-value">-</span>ms</div>
    <div id="lcp">LCP: <span id="lcp-value">-</span>ms</div>
    <div id="cls">CLS: <span id="cls-value">-</span></div>
    <div id="fid">FID: <span id="fid-value">-</span>ms</div>
    <div id="ttfb">TTFB: <span id="ttfb-value">-</span>ms</div>
    <button onclick="document.getElementById('performance-monitor').style.display='none'" style="background: #ff4444; color: white; border: none; padding: 2px 6px; border-radius: 3px; cursor: pointer; margin-top: 5px;">Close</button>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Show performance monitor
    document.getElementById('performance-monitor').style.display = 'block';
    
    // Monitor performance metrics
    const observer = new PerformanceObserver((list) => {
        for (const entry of list.getEntries()) {
            switch(entry.entryType) {
                case 'largest-contentful-paint':
                    document.getElementById('lcp-value').textContent = Math.round(entry.startTime);
                    break;
                case 'first-input':
                    document.getElementById('fid-value').textContent = Math.round(entry.processingStart - entry.startTime);
                    break;
                case 'layout-shift':
                    if (!entry.hadRecentInput) {
                        document.getElementById('cls-value').textContent = entry.value.toFixed(3);
                    }
                    break;
                case 'paint':
                    if (entry.name === 'first-contentful-paint') {
                        document.getElementById('fcp-value').textContent = Math.round(entry.startTime);
                    }
                    break;
                case 'navigation':
                    document.getElementById('load-time-value').textContent = Math.round(entry.loadEventEnd - entry.loadEventStart);
                    document.getElementById('ttfb-value').textContent = Math.round(entry.responseStart - entry.requestStart);
                    break;
            }
        }
    });
    
    try {
        observer.observe({ entryTypes: ['largest-contentful-paint', 'first-input', 'layout-shift', 'paint', 'navigation'] });
    } catch (e) {
        console.log('Performance monitoring not supported');
    }
    
    // Performance budget warnings
    setTimeout(() => {
        const loadTime = performance.timing.loadEventEnd - performance.timing.loadEventStart;
        if (loadTime > 3000) {
            console.warn('⚠️ Page load time exceeded budget:', loadTime + 'ms');
        }
        
        const lcp = document.getElementById('lcp-value').textContent;
        if (lcp && parseInt(lcp) > 2500) {
            console.warn('⚠️ LCP exceeded budget:', lcp + 'ms');
        }
        
        const cls = document.getElementById('cls-value').textContent;
        if (cls && parseFloat(cls) > 0.1) {
            console.warn('⚠️ CLS exceeded budget:', cls);
        }
    }, 5000);
});
</script>
@endif
