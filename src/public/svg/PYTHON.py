mport pygame
import random

# Inicializa Pygame
pygame.init()

# Configura la ventana
ancho_ventana, alto_ventana = 400, 600
ventana = pygame.display.set_mode((ancho_ventana, alto_ventana))
pygame.display.set_caption("Flappy Bird")

# Colores
BLANCO = (255, 255, 255)
NEGRO = (0, 0, 0)
AZUL = (135, 206, 250)
VERDE = (0, 255, 0)

# Configura el reloj
reloj = pygame.time.Clock()
FPS = 60

# Carga las imágenes
imagen_fondo = pygame.Surface((ancho_ventana, alto_ventana))
imagen_fondo.fill(AZUL)

# Define el pájaro
class Pajaro(pygame.sprite.Sprite):
    def __init__(self):
        super().__init__()
        self.image = pygame.Surface((30, 20))
        self.image.fill(NEGRO)
        self.rect = self.image.get_rect(center=(100, alto_ventana // 2))
        self.velocidad = 0
        self.gravedad = 0.5

    def update(self):
        self.velocidad += self.gravedad
        self.rect.y += self.velocidad

        if self.rect.y > alto_ventana - self.rect.height:
            self.rect.y = alto_ventana - self.rect.height
            self.velocidad = 0

        if self.rect.y < 0:
            self.rect.y = 0
            self.velocidad = 0

    def saltar(self):
        self.velocidad = -10

# Define los tubos
class Tubo(pygame.sprite.Sprite):
    def __init__(self):
        super().__init__()
        self.ancho = 70
        self.altura = random.randint(150, 400)
        self.image = pygame.Surface((self.ancho, self.altura))
        self.image.fill(VERDE)
        self.rect = self.image.get_rect(topleft=(ancho_ventana, 0))
        self.rect.bottomleft = (ancho_ventana, self.altura)
        self.velocidad = -5

    def update(self):
        self.rect.x += self.velocidad
        if self.rect.right < 0:
            self.kill()

# Configura el juego
def main():
    pajaro = Pajaro()
    todos_sprites = pygame.sprite.Group()
    todos_sprites.add(pajaro)

    tubos = pygame.sprite.Group()
    agregar_tubo_evento = pygame.USEREVENT + 1
    pygame.time.set_timer(agregar_tubo_evento, 1500)

    puntuacion = 0
    fuente = pygame.font.SysFont(None, 36)

    while True:
        for evento in pygame.event.get():
            if evento.type == pygame.QUIT:
                pygame.quit()
                return
            elif evento.type == pygame.KEYDOWN:
                if evento.key == pygame.K_SPACE:
                    pajaro.saltar()
            elif evento.type == agregar_tubo_evento:
                nuevo_tubo = Tubo()
                todos_sprites.add(nuevo_tubo)
                tubos.add(nuevo_tubo)

        # Actualiza los sprites
        todos_sprites.update()

        # Colisiones
        if pygame.sprite.spritecollide(pajaro, tubos, False):
            break

        # Mueve los tubos y verifica la puntuación
        for tubo in tubos:
            if tubo.rect.right < pajaro.rect.left and not tubo in tubos:
                puntuacion += 1

        # Dibuja el fondo
        ventana.blit(imagen_fondo, (0, 0))

        # Dibuja los sprites
        todos_sprites.draw(ventana)

        # Dibuja la puntuación
        texto_puntuacion = fuente.render(f"Puntuación: {puntuacion}", True, BLANCO)
        ventana.blit(texto_puntuacion, (10, 10))

        pygame.display.flip()
        reloj.tick(FPS)

if __name__ == "__main__":
    main()