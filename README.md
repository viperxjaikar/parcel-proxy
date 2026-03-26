# Parcel Proxy

A lightweight proxy server for Parcel-based web applications that enables custom API routing, CORS handling, and flexible local development configuration.

---

## 🚀 What This Actually Solves

Frontend development often breaks due to:
- CORS restrictions when calling APIs  
- Hardcoded backend URLs  
- Lack of flexible routing in local environments  

This proxy server provides:
- Controlled request routing  
- Local API abstraction layer  
- Seamless development without backend changes  

---

## ⚙️ Core Features

### Proxy Routing
- Redirect API requests to different backend servers  
- Supports route-based configuration  

### CORS Handling
- Eliminates cross-origin issues during development  
- Allows frontend to interact with external APIs safely  

### Configurable Rules
- Define proxy behavior using JSON, YAML, or JS config  
- Easy to extend and modify  

### HTTPS Support
- Optional HTTPS setup for secure local testing  

### Parcel Integration
- Works alongside Parcel bundler for smooth dev workflow  

---

## 🏗️ System Flow

Client Request → Proxy Server → Target API → Response → Client

---

## 📁 Project Structure

parcel-proxy/  
├── server.js              # Express proxy server  
├── proxy.config.js        # Routing configuration  
├── package.json  
└── README.md  

---

## 🛠️ Tech Stack

Backend:
- Node.js  
- Express  

Proxy:
- http-proxy-middleware  

Bundler:
- Parcel  

---

## 🚀 Setup

git clone https://github.com/viperxjaikar/parcel-proxy.git  
cd parcel-proxy  

npm install  

# Configure proxy rules  
Edit proxy.config.js  

# Start server  
npm run start  

---

## 🧪 How to Test

- Define a proxy route (e.g., /api → backend server)  
- Run Parcel app alongside proxy  
- Send API requests → verify correct routing  
- Check headers for proper CORS handling  

---

## ⚠️ Limitations

- Designed for development, not production-grade scaling  
- No built-in authentication or rate limiting  
- Manual configuration required for complex routing  
- No caching or performance optimization layer  

---

## 💡 Future Improvements

- Add dynamic route management via UI  
- Integrate logging and request monitoring  
- Add rate limiting and authentication  
- Support caching for improved performance  
- Dockerize for easier setup  

---

## 📌 Why This Project Matters

This is not just a proxy setup.

It demonstrates:
- Understanding of HTTP request flow  
- Middleware-based routing  
- Handling CORS and API abstraction  
- Practical dev tooling for frontend-backend integration  

---

## 👤 Author

Jaikar Ramu  
https://github.com/viperxjaikar  

---

## ⭐ Star if useful
