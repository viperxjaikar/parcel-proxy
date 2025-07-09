# 📦 Parcel Proxy

A fast, lightweight proxy server for Parcel-based web projects. This tool helps you develop and test Parcel apps with custom proxy rules, API routing, and local server configuration.

## 🚀 Features
⚡ Blazing fast proxy for Parcel bundler  
🔀 Customizable proxy routes for API calls  
🌐 Seamless local development with CORS handling  
🛠️ Easy to configure and extend  
🔒 Optional HTTPS support for secure local dev  

## 🛠️ Tech Stack
**Bundler**: Parcel  
**Server**: Node.js, Express  
**Config**: JSON/YAML or JS-based config  
**Proxy**: http-proxy-middleware  

## 🧪 How to Run Locally

```bash
# 1️⃣ Clone the repository
git clone https://github.com/viperxjaikar/parcel-proxy.git
cd parcel-proxy

# 2️⃣ Install dependencies
npm install

# 3️⃣ Configure your proxy rules
→ Edit proxy.config.js (or .json) as needed

# 4️⃣ Start the proxy server
npm run start
