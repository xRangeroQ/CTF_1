# Libraries
import json
import socket
import threading

# Handle Client
def HCL(client, address):

    print(address)

    for _ in range(3):
        client.send(b"FLAG: {ServerMessage_569}")

# Create Server
server = socket.socket(socket.AF_INET, socket.SOCK_STREAM)
server.bind(("0.0.0.0", 0))
server.listen(30)

# Get Connection
while True:
    cn, addr = server.accept()
    t = threading.Thread(target=HCL, args=(cn, addr))
    t.start()