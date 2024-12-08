<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">
  <head>
    <meta charset="utf-8">
    <meta property="og:title" content="AS150325 - Tsukudani Network">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://as150325.net/ogp.webp">
    <meta name="twitter:image" content="https://as150325.net/twitter_small.webp">
    <meta name="twitter:card" content="summary">
    <meta property="og:description" content="non-profit, research network maintained by Tsukudani.">
    <meta property="og:url" content="https://as150325.net/">
    <link rel="stylesheet" href="main.css">
    <script>document.addEventListener('DOMContentLoaded', (event) => {
      document.getElementById("v<?php include 'ipver.php'; ?>").style.display ="flex";});</script>
    <title>AS150325 - Tsukudani Network</title>
  </head>

  <body>
    <div class="header">
      <img src="logo.webp" alt="AS150325 Tsukudani Network Logo.">
      <div class="link"><a href="#about"><span>ABOUT</span></a></div>
      <div class="link"><a href="#peering"><span>PEERING</span></a></div>
      <div class="link"><a href="#contact"><span>CONTACT</span></a></div>
      <div class="link-ipv6"><a href="https://ipv6.as150325.net/"><span>IPv6</span></a></div>
    </div>

    <div class="content">
      <div class="about" id="about">
        <h2>About</h2>
        <p>AS150325 - non-profit, research network maintained by <a href="https://tsukudani.work" target="_blank" rel="noopener noreferrer">Tsukudani</a>.</p>

        <h3>My Prefixes</h3>
        <table>
          <thead>
            <tr>
              <th>Prefix</th><th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>44.31.252.0/24</td><td><span class="green">ANNOUNCED</span></td>
            </tr>
            <tr>
              <td>2406:7ec0:1000::/46</td><td><span class="green">ANNOUNCED</span></td>
            </tr>
          </tbody>
        </table>

        <h3>POPs</h3>
        <p>
          <table>
            <thead>
              <tr>
                <th>Location</th><th>Details</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Saitama, Japan</td><td>HomeLab</td>
              </tr>
              <tr>
                <td>Tokyo, Japan</td><td>Equinix TY8</td>
              </tr>
              <tr>
                <td>Zürich, Switzerland</td><td>iFog</td>
              </tr>
            </tbody>
          </table>
        </p>

        <p>
          <table>
            <thead>
              <tr>
                <th>Internet Exchange</th><th>Speed</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>INIXP Asia</td><td>100Gbps</td>
              </tr>
              <tr>
                <td>FogIXP</td><td>1Gbps</td>
              </tr>
              <tr>
                <td>BGP.Exchange Zurich</td><td>1Gbps</td>
              </tr>
              <tr>
                <td>4b42 Internet Exchange Point</td><td>100Mbps</td>
              </tr>
            </tbody>
          </table>
        </p>
      </div>

      <div class="peering" id="peering">
        <h2>Peering</h2>
        <h3>Policy</h3>
        <p>Tsukudani Network has open peering policy. Peering via GRE, SIT, WireGuard and IXP is available, and peering via intra-network loopback is available when connected to NTT East's NGN.</p>
        <h3>Our network information</h3>
        <ul>
          <li>ASN: 150325</li>
          <li>AS-SET: AS-TSUKUDANI</li>
          <li>Endpoint: Please contact me :)</li>
        </ul>
        <p>If you are interested in peering, please send an email to <span id="class">admin [at] tsukudani.work</span> with the following information:</p>
        <ul>
          <li>ASN</li>
          <li>AS-SET (if available)</li>
          <li>Tunnel type</li>
          <li>Endpoint (if GRE or SIT)</li>
          <li>Contact information</li>
        </ul>
        <p>We look forward to peering with you!</p>
      </div>

      <div class="contact" id="contact">
        <h2>Contact</h2>
        <p>Personal website: <a href="https://tsukudani.work" target="_blank" rel="noopener noreferrer">tsukudani.work</a></p>
        <p>Mail: admin [at] tsukudani.work</p>
        <p>PeeringDB: <a href="https://www.peeringdb.com/net/31074" target="_blank" rel="noopener noreferrer">AS150325</a></p>
        <p>BGP Tools: <a href="https://bgp.tools/as/150325" target="_blank" rel="noopener noreferrer">AS150325</a></p>
        <p>he.net BGP Toolkit: <a href="https://bgp.he.net/AS150325" target="_blank" rel="noopener noreferrer">AS150325</a></p>
      </div>

      <div class="thanks">
        <h2>Thanks</h2>
        <p><a href="https://www.1nextnet.com/" target="_blank" rel="noopener noreferrer">1NEXTNET</a>: LIR who helped me purchase ASN!</p>
        <p><span class="underline">Shimane Datacenter Club</span>: BGP sessions and IP blocks!</p>
        <p><span class="underline">Rapid-Fire-y</span>: BGP sessions and TY8 colocation!</p>
        <p id="thank-everyone">Everyone in the Internet community!</p>
      </div>

      <div class="credit">
        <span><a href="http://creativecommons.org/licenses/by-sa/4.0/" target="_blank" rel="noopener noreferrer"><img alt="CC BY-SA 4.0" src="https://www.licensebuttons.net/l/by-sa/4.0/88x31.png"></a>
        2024 Tsukudani Network.</span>
        <span class="ipver" id="v4">via IPv4</span>
        <span class="ipver" id="v6">via IPv6⚡</span>
      </div>
    </div>
  </body>
</html>
