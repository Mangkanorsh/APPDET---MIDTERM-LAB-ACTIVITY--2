#include <SoftwareSerial.h>

// Define Bluetooth module pins
int rxPin = 0;
int txPin = 1;
SoftwareSerial bluetooth(rxPin, txPin); // RX, TX

// Define relay control pin (replace with your actual pin)
const int relayPin = 8;

// Define variable to store speed level
int speed = 0;

void setup() {
    Serial.begin(9600);   // Open serial communication for debugging (optional)
    bluetooth.begin(9600); // Set Bluetooth communication baud rate
    pinMode(relayPin, OUTPUT); // Set relay control pin as output

    // Set initial relay state (LOW for off, HIGH for typical DC fan control)
    digitalWrite(relayPin, LOW); 
}

void loop() {
    if (bluetooth.available()) {
        char command = bluetooth.read();

        switch (command) {
            case 'F': // Turn fan on (replace with your desired voice command)
                digitalWrite(relayPin, HIGH);
                speed = 1;
                Serial.println("Fan turned on!");
                break;
            case 'O': // Turn fan off (replace with your desired voice command)
                digitalWrite(relayPin, LOW);
                speed = 0;
                Serial.println("Fan turned off!");
                break;
            case 'U': // Increase speed (replace with your desired voice command)
                if (speed < 3) { // Adjust according to your desired number of speed levels
                    speed++;
                    // Implement logic to control fan speed here (e.g., PWM)
                    Serial.println("Fan speed increased!");
                } else {
                    Serial.println("Fan already at maximum speed!");
                }
                break;
            case 'D': // Decrease speed (replace with your desired voice command)
                if (speed > 0) {
                    speed--;
                    // Implement logic to control fan speed here (e.g., PWM)
                    Serial.println("Fan speed decreased!");
                } else {
                    Serial.println("Fan already at minimum speed!");
                }
                break;
        }
    }
}