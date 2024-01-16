using CKUT.Core.Services.Ch5.Models;

namespace CKUT.Core.Services.Ch5
{
    public class BoxPuzzleGame
    {
        private readonly Tile[,] _map =
        {
            { new Unbreakable(), new Unbreakable(), new Unbreakable(), new Unbreakable(), new Unbreakable(), new Unbreakable(), new Unbreakable(), new Unbreakable() },
            { new Unbreakable(), new Player(), new Air(), new Flux(), new Flux(), new Unbreakable(), new Air(), new Unbreakable() },
            { new Unbreakable(), new Stone(), new Unbreakable(), new Box(), new Flux(), new Unbreakable(), new Air(), new Unbreakable() },
            { new Unbreakable(), new Key1(), new Stone(), new Flux(), new Flux(), new Unbreakable(), new Air(), new Unbreakable() },
            { new Unbreakable(), new Stone(), new Flux(), new Flux(), new Flux(), new Lock1(), new Air(), new Unbreakable() },
            { new Unbreakable(), new Unbreakable(), new Unbreakable(), new Unbreakable(), new Unbreakable(), new Unbreakable(), new Unbreakable(), new Unbreakable() },
        };

        private readonly int[,] _oldMap =
        {
            { 2, 2, 2, 2, 2, 2, 2, 2 },
            { 2, 3, 0, 1, 1, 2, 0, 2 },
            { 2, 4, 2, 6, 1, 2, 0, 2 },
            { 2, 8, 4, 1, 1, 2, 0, 2 },
            { 2, 4, 1, 1, 1, 9, 0, 2 },
            { 2, 2, 2, 2, 2, 2, 2, 2 },
        };

        public void UpdateTile(int x, int y)
        {
            if ((_map[y, x].IsStone() || _map[y, x].IsFallingStone()) && _map[y + 1, x].IsAir())
            {
                _map[y + 1, x] = new FallingStone();
                _map[y, x] = new Air();
            }
            else if ((_map[y, x].IsBox() || _map[y, x].IsFallingBox()) && _map[y + 1, x].IsAir())
            {
                _map[y + 1, x] = new FallingBox();
                _map[y, x] = new Air();
            }
            else if (_map[y, x].IsFallingStone())
            {
                _map[y, x] = new Stone();
            }
            else if (_map[y, x].IsFallingBox())
            {
                _map[y, x] = new Box();
            }
        }
    }
}