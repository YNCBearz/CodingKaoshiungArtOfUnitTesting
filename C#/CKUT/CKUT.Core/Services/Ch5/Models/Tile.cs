namespace CKUT.Core.Services.Ch5.Models
{
    public interface Tile
    {
        bool IsStony();
        bool IsFallingStone();
        bool IsAir();
        bool IsBox();
        bool IsFallingBox();
        void MoveHorizontal();
    }
}