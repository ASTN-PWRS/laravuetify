import { io } from "socket.io-client";
//
// https://socket.io/docs/v4/client-api/
//
export const socket = io(import.meta.env.VITE_SIO_URL, {
    transports: ["polling", "websocket"],
    autoConnect: false,
});
